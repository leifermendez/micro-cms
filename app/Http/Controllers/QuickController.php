<?php

namespace App\Http\Controllers;

use App\comments;
use App\contents;
use App\menu;
use App\notifactions;
use App\quick_pay;
use App\services;
use App\setting;
use App\transactions;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Cartalyst\Stripe\Stripe;

class QuickController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array(
            'pays' => quick_pay::where('id_agent',Auth::id())
                ->orderBy('id','desc')
                ->get()
        );

        return view('panel.pay',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Auth::user()->level=='user'){
            return redirect('admin/home?error=User_Not_Agent');
        }

        $values = array(
            'id_user' => $request->id_user,
            'description' => $request->description,
            'created_at' => Carbon::now()->toDateString(),
            'amount' => floatval($request->amount),
            'id_agent' => Auth::id(),
            'plan_subscribe' => $request->plan_subscription
        );

        $data_user = User::find($request->id_user);
        $id=quick_pay::insertGetId($values);

        $data = array(
            'name' => $data_user->name,
            'link' => url('/').'/pay/'.$id,
            'email' => $data_user->email,
            'description' => $request->description,
            'amount' => floatval($request->amount)
        );

        (new MailController)->single($data,'pay_link');

        return redirect('admin/pay?msg=Link_Generate');
      ;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(!quick_pay::where('id',$id)->exists()){
           return redirect('/?error=ID_Not_Found');
        }else{
            if(quick_pay::find($id)->status){
                return redirect('/?error=Status_'.quick_pay::find($id)->status);
            }
        }

        $contents_block = array();
        $i = 0;
        $c = 0;
        $metas = setting::where('meta',1)->get();
        $options = setting::where('meta',0)->get();
        $menus = menu::all();
        $contentsbig = contents::orderBy('id','desc')->where('big',1)->get();
        $contents = contents::orderBy('id','desc')->where('big',0)->get();
        $comments = comments::orderBy('id','desc')->get();
        $service = quick_pay::find($id);

        foreach ($contents as $content){

            if(($i) % 3 == 0){
                $c++;
                $contents_block[$c][] = $content;
            }else{
                $contents_block[$c][] = $content;
            }
            $i++;
        }

        $notifications = notifactions::whereDate('start_at','<=',Carbon::today()->toDateString())
            ->whereDate('end_at','>',Carbon::today()->toDateString())
            ->get();

        return view('quick.show',[
            'metas'=>$metas,
            'options'=>$options,
            'menus' => $menus,
            'notifications' => $notifications,
            'contentsbig' => $contentsbig,
            'contents_block' => $contents_block,
            'service' => $service,
            'comments' => $comments
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
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


        return view('quick.edit', [
            'metas' => $metas,
            'options' => $options,
            'menus' => $menus,
            'notifications' => $notifications,
            'data' => $data,
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
