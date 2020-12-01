<?php

namespace App\Http\Controllers;

use App\comments;
use App\contents;
use App\coupons;
use App\menu;
use App\message;
use App\notifactions;
use App\quick_pay;
use App\services;
use App\setting;
use App\transactions;
use App\User;
use Cartalyst\Stripe\Stripe;
use PDF;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Braintree_Gateway;


class CheckController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if (!isset($request->id)) {
            return redirect('/');
        }

        if (!services::where('id', $request->id)->exists()) {
            return redirect('/');
        }

        $contents_block = array();
        $i = 0;
        $c = 0;
        $metas = setting::where('meta', 1)->get();
        $options = setting::where('meta', 0)->get();
        $menus = menu::all();
        $contentsbig = contents::orderBy('id', 'desc')->where('big', 1)->get();
        $contents = contents::orderBy('id', 'desc')->where('big', 0)->get();
        $services = services::all();
        $comments = comments::orderBy('id', 'desc')->get();

        foreach ($contents as $content) {

            if (($i) % 3 == 0) {
                $c++;
                $contents_block[$c][] = $content;
            } else {
                $contents_block[$c][] = $content;
            }
            $i++;
        }

        $notifications = notifactions::whereDate('start_at', '<=', Carbon::today()->toDateString())
            ->whereDate('end_at', '>', Carbon::today()->toDateString())
            ->get();

        $service = services::find($request->id);

        return view('checkout.create', [
            'metas' => $metas,
            'options' => $options,
            'menus' => $menus,
            'notifications' => $notifications,
            'contentsbig' => $contentsbig,
            'contents_block' => $contents_block,
            'services' => $services,
            'comments' => $comments,
            'service' => $service
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $stripe = Stripe::make(env('STRIPE_SECRET'), '2018-02-28');
        $token = $request->stripeToken;

        if (!services::where('id', $request->id_service)->exists()) {
            return redirect('/');
        }

        $data_service = services::find($request->id_service);
        $description = $data_service->title;
        $price = $data_service->price;
        if(isset($request->coupon)){
            if(coupons::where('code',$request->coupon)->exists()){
                $limit=transactions::where('coupon',$request->coupon)->count();
                $dataCoupon = coupons::where('code',$request->coupon)->first();
                if($limit<$dataCoupon->limit){
                    if($dataCoupon->type==='amount'){
                        $price = ($price-$dataCoupon->amount);
                        $description = $description.' Coupon( '.$dataCoupon->code.')';
                    }elseif($dataCoupon->type==='percentage'){
                        $price = ($price)-($price*(($dataCoupon->amount)/100));
                        $description = $description.' Coupon( '.$dataCoupon->code.' )';
                    }
                    if($price<1){
                        return response()->json('Cupon no válido');
                    }
                }else{
                    return response()->json('Cupon no válido');
                }

            }else{
                return response()->json('Cupon no válido');
            }
        }

        $result = $stripe->charges()->create([
            "amount" => floatval($price),
            "currency" => "usd",
            "description" => $description,
            "source" => $token,
        ]);


        if ($result['status'] == 'succeeded') {


            if (User::where('email', $request->email)->exists()) {
                $data_user = User::where('email', $request->email)->first();
            } else {

                $pwd = str_random(8);

                $id_usr = User::insertGetId([
                    'name' => $request->firstName,
                    'email' => $request->email,
                    'password' => bcrypt($pwd),
                    'phone' => $request->phone,
                    'avatar' => '/img/default.png'
                ]);

                $data_user = User::find($id_usr);
                $email_send = array(
                    'name' => $request->firstName,
                    'username' => $request->email,
                    'email' => $request->email,
                    'pass' => $pwd
                );

                (new MailController)->single($email_send, 'register');
            }

            if (User::where('level', 'agent')->exists()) {
                $data_agents = User::where('level', 'agent')->get();
                $data_agents = (array)$data_agents;
                $id_agent = array_rand($data_agents, 1);
                $id_agent = $data_agents[$id_agent];
            } else {
                return response()->json(['msg' => 'Ocurrio un error! Agents Not Found']);
            }

            $values = array(
                'code' => $result['id'],
                'status' => $result['status'],
                'amount' => $result['amount'],
                'created_at' => Carbon::now()->toDateString(),
                'currency' => $result['currency'],
                'email' => $request->email,
                'id_user' => $data_user->id,
                'id_agent' => $id_agent[0]['id'],
                'coupon' => $request->coupon

            );


            message::insert([
                'title' => '[' . $result['id'] . '] ' . $data_service->title,
                'description' => 'Hola ' . $data_user->name . ' soy el encargado de tu caso. Puedes expandirme la informacion',
                'created_at' => Carbon::now()->toDateString(),
                'from_user_id' => $id_agent[0]['id'],
                'to_user_id' => $data_user->id
            ]);

            $id = transactions::insertGetId($values);

            if(isset($request->coupon)){
                coupons::where('code',$request->coupon)->update(
                    ['updated_at'=>Carbon::now()->toDateString()]);
            }

            $data_email = array(
                'name' => $data_user->name,
                'email' => $data_user->email,
                'amount' => (($result['amount'])/100),
                'id' => $id,
                'link_pdf' => url('/') . '/checkout/' . $id . '/ticket/pdf',
                'pay' => transactions::find($id)
            );


            (new MailController)->single($data_email, 'thankyou');

            return response()->json([
                'id'=>$id,
                'status'=>true
            ]);


        }else{
            return response()->json(['msg' => 'Ocurrio un error! Contactanos']);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $metas = setting::where('meta', 1)->get();
        $options = setting::where('meta', 0)->get();
        $menus = menu::all();


        if (!transactions::where('id', $id)->exists()) {
            return redirect('/');
        }

        $data = transactions::find($id);
        $data->setAttribute('amount',($data->amount)/100);

        $notifications = notifactions::whereDate('start_at', '<=', Carbon::today()->toDateString())
            ->whereDate('end_at', '>', Carbon::today()->toDateString())
            ->get();

        $data_agent = User::find($data->id_agent);

        return view('checkout.edit', [
            'metas' => $metas,
            'options' => $options,
            'menus' => $menus,
            'notifications' => $notifications,
            'data' => $data,
            'agent' => $data_agent
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function pdf($id)
    {

        if (!transactions::where('id', $id)->exists()) {
            return redirect('/');
        }

        $data = transactions::find($id);
        $path = public_path('img/logo_aws_new.png');
        $data['img'] = $path;
        $data->setAttribute('amount',($data->amount)/100);

        $pdf = PDF::loadView('pdf.invoice', $data);
        return $pdf->download("$data->id-invoice.pdf");
    }

    public function token()
    {
        $gateway = new Braintree_Gateway([
            'environment' => 'sandbox',
            'merchantId' => '5zfy5f8xwc5zvnsk',
            'publicKey' => 'swgjyxpm9yqgm3y3',
            'privateKey' => 'ebd6b9312ccef75650e3b862a8a6a08f'
        ]);

        $clientToken = $gateway->clientToken()->generate();

        return response()->json([
            'token' => $clientToken
        ]);
    }

    public function payquick(Request $request, $id)
    {

        $client_ID = null;
        if (!quick_pay::where('id', $id)->exists()) {
            return redirect('/?error=ID_Not_Found');
        } else if (quick_pay::where('id', $id)->first()->status) {
            return redirect('/?error=Status_Unavailable');
        }

        $stripe = Stripe::make(env('STRIPE_SECRET'), '2018-02-28');
        $token = $request->stripeToken;

        $data_pay = quick_pay::find($id);

        /**Create Customer  --UPDATE Leifer */
        $customer = $stripe->customers()->create([
            'email' => $request->email,
            'description' => 'Monto a pagar ('.$request->amount.'), Nombre: '.$request->firstName,
            'source' => $token
        ]);
        $client_ID = $customer['id'];
        /** END */


        $data_quick = quick_pay::find($id);
        if($data_quick->plan_subscribe && $client_ID){
            $result = $stripe->subscriptions()
            ->create($client_ID, [
                'plan' => $data_quick->plan_subscribe,
            ]);
            $result = [
                'id' => $result['id'],
                'status' => $result['status'],
                'currency' => $result['plan']['currency'],
                'amount' => $result['plan']['amount']
            ];
    
        }else{
            $result = $stripe->charges()->create([
                "amount" => floatval($data_pay->amount),
                "currency" => "usd",
                "description" =>  'Servicio a medida',
                "customer" => $client_ID,
            ]);
        }
        /** -------- */

        /** -------- */

        if ($result['status'] == 'succeeded' || $result['status'] == 'active') {

            $values = array(
                'code' => $result['id'],
                'status' => $result['status'],
                'amount' => floatval($request->amount),
                'created_at' => Carbon::now()->toDateString(),
                'currency' => $result['currency'],
                'email' => $request->email,
                'id_user' => $data_quick->id_user,
                'id_agent' => $data_quick->id_agente,
                'coupon' => str_random(8)

            );

            $id = transactions::insertGetId($values);

            quick_pay::where('id', $data_quick->id)->update([
                'status' => transactions::where('id', $id)->first()->status
            ]);

            $data_user = User::find($data_pay->id_user);

            $data_email = array(
                'name' => $data_user->name,
                'email' => $data_user->email,
                'amount' => (($result['amount'])/100),
                'id' => $id,
                'link_pdf' => url('/') . '/checkout/' . $id . '/ticket/pdf',
                'pay' => transactions::find($id)
            );

            (new MailController)->single($data_email, 'thankyou');

            return response()->json([
                'id'=>$id,
                'status'=>true
            ]);

        }else{
            return response()->json(['msg' => 'Ocurrio un error! Contactanos']);
        }

    }
}
