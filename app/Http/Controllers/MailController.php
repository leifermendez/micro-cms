<?php

namespace App\Http\Controllers;

use App\setting;
use App\suscribers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $geo_data=geoip()->getLocation();
        $values = array(
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'msg' => $request->message,
            'web' => $request->web,
            'geo_data' => $geo_data
        );

        $settings = setting::all();

        $email_data = array(
            'email' => false,
            'email_name' => false,
            'email_subject' => false,
            'email_from' => false
        );

        foreach ($settings as $setting) {
            if ($setting->sett_key == 'email') {
                $email_data['email'] = $setting->sett_value;
            } else
                if ($setting->sett_key == 'email_name') {
                    $email_data['email_name'] = $setting->sett_value;
                } else
                    if ($setting->sett_key == 'email_subject') {
                        $email_data['email_subject'] = $setting->sett_value;
                    } else
                        if ($setting->sett_key == 'email_from') {
                            $email_data['email_from'] = $setting->sett_value;
                        }
        }

        if (isset($request->newsletter)) {
            $suscriber = array(
                'email' => $request->email,
                'web' => $request->web,
                'phone' => $request->phone,
                'created_at' => Carbon::now()->toDateString()
            );
            suscribers::insert($suscriber);
        }

        if ($email_data['email']) {
            Mail::send('vendor.mail.html.single', $values, function ($message) use ($email_data) {
                $message->from($email_data['email_from'], $email_data['email_name']);
                $message->to($email_data['email'])->subject($email_data['email_subject']);
            });

            return response()->json([
                'status' => true,
                'msg' => 'Send Mail'
            ]);
        } else {
            return response()->json([
                'status' => false,
                'msg' => 'Not found email'
            ]);
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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

    public function single($values=array(),$type='normal')
    {

        $settings = setting::all();
        $email_admin = null;
        if(setting::where('sett_key','email')->exists()){
            $email_admin = setting::where('sett_key','email')->first()->sett_value;
        }

        $email_data = array(
            'email' => false,
            'email_name' => false,
            'email_subject' => false,
            'email_from' => false,
            'email_admin' => $email_admin
        );

        foreach ($settings as $setting) {
            if ($setting->sett_key == 'email') {
                $email_data['email'] = $setting->sett_value;
            } else
                if ($setting->sett_key == 'email_name') {
                    $email_data['email_name'] = $setting->sett_value;
                } else
                    if ($setting->sett_key == 'email_subject') {
                        $email_data['email_subject'] = $setting->sett_value;
                    } else
                        if ($setting->sett_key == 'email_from') {
                            $email_data['email_from'] = $setting->sett_value;
                        }
        }

        $email_data['email'] = $values['email'];

        if($type == 'normal'){
            Mail::send('vendor.mail.html.single', $values, function ($message) use ($email_data) {
                $message->from($email_data['email_from'], $email_data['email_name']);
                $message->to($email_data['email'])->subject('Tienes un mensaje nuevo!');
            });

        }else if($type == 'register'){
            Mail::send('vendor.mail.html.new', $values, function ($message) use ($email_data) {
                $message->from($email_data['email_from'], $email_data['email_name']);
                $message->to($email_data['email'])->subject('Bienvenido');
            });

        }else if($type == 'pay_link'){
            Mail::send('vendor.mail.html.pay', $values, function ($message) use ($email_data) {
                $message->from($email_data['email_from'], $email_data['email_name']);
                $message->to($email_data['email'])->subject('Finaliza tu pago');
            });
        }else if($type == 'thankyou'){
            Mail::send('vendor.mail.html.thankyoupay', $values, function ($message) use ($email_data) {
                $message->from($email_data['email_from'], $email_data['email_name']);
                $message->to($email_data['email'])->subject('Gracias por tu pago!');
            });
            Mail::send('vendor.mail.html.thankyoupayadmin', $values, function ($message) use ($email_data) {
                $message->from($email_data['email_from'], $email_data['email_name']);
                $message->to($email_data['email_admin'])->subject('Recibio un pago');
            });
        }else if($type == 'clean'){
            $email_data['email_subject'] = $values['template']->subject;
            $email_data['email_name'] = $values['template']->email_title;
            $email_data['email_attachment'] = $values['attachment'];


            Mail::send('vendor.mail.html.message', $values, function ($message) use ($email_data) {
                $message->from($email_data['email_from'], $email_data['email_name']);
                $message->to($email_data['email'])->subject($email_data['email_subject']);
                if($email_data['email_attachment']){
                    $message->attach($email_data['email_attachment']);
                }

            });
        }


        return response()->json([
            'status' => true,
            'msg' => 'Send Mail'
        ]);

    }
}
