<?php

namespace App\Http\Controllers;

use App\comments;
use App\contents;
use App\message;
use App\services;
use App\setting;
use App\transactions;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array(
            'messages' => DB::table('message')
                ->join('users', 'users.id', '=', 'message.from_user_id')
                ->select(
                    'message.*',
                    'users.avatar as user_avatar',
                    'users.email as user_email',
                    'users.phone as user_phone',
                    'users.skype as users_skype')
                ->where('message.to_user_id',Auth::id())
                ->orderBy('id','desc')->get(),
            'single' => DB::table('message')
                ->join('users', 'users.id', '=', 'message.from_user_id')
                ->select(
                    'message.*',
                    'users.avatar as user_avatar',
                    'users.email as user_email',
                    'users.phone as user_phone',
                    'users.skype as users_skype')
                ->where('message.to_user_id',Auth::id())
                ->orderBy('id','desc')->first(),

        );

        return view('panel.home',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $id_message = $request->id_message;
        $data_message = message::find($id_message);
        $values = array(
            'description' => $request->message,
            'from_user_id' => Auth::id(),
            'to_user_id' => $data_message->from_user_id,
            'title' => $data_message->title,
            'created_at' => Carbon::now()->toDateString()
        );

        $email_send = array(
            'name' => User::find($data_message->from_user_id)->name,
            'phone' => User::find($data_message->from_user_id)->phone,
            'msg' => $request->message,
            'email' => User::find($data_message->from_user_id)->email
        );


        message::insert($values);

        (new MailController)->single($email_send,'normal');

        return redirect('admin/home?msg=Send');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(!message::where('id',$id)->exists()){
            return redirect('admin/home');
        }
        if(!message::where('id',$id)->where('to_user_id',Auth::id())->exists()){
            return redirect('admin/home');
        }

        $data = array(
            'messages' => DB::table('message')
                ->join('users', 'users.id', '=', 'message.from_user_id')
                ->select(
                    'message.*',
                    'users.avatar as user_avatar',
                    'users.email as user_email',
                    'users.phone as user_phone',
                    'users.skype as users_skype')
                ->where('message.to_user_id',Auth::id())
                ->orderBy('id','desc')->get(),
            'single' => DB::table('message')
                ->join('users', 'users.id', '=', 'message.from_user_id')
                ->select(
                    'message.*',
                    'users.avatar as user_avatar',
                    'users.email as user_email',
                    'users.phone as user_phone',
                    'users.skype as users_skype')
                ->where('message.to_user_id',Auth::id())
                ->where('message.id',$id)->first()

        );

        return view('panel.home',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return 'Estoy aqui a';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id=null)
    {
        foreach ($request->all() as $key => $value ){
            if(is_numeric($key)){
                setting::where('id',$key)->update(['sett_value'=>$value]);
            }
        }

        return redirect('admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        setting::where('id',$id)->delete();
        return redirect('admin');
    }

    public function transactions()
    {
        if(Auth::user()->level=='user'){
            $data = transactions::where('id_user',Auth::id())->get();
        }else if(Auth::user()->level=='agent'){
            $data = transactions::where('id_agent',Auth::id())->get();
        }else if(Auth::user()->level=='admin'){
            $data = transactions::orderBy('id','desc')->get();
        }

        $data = array(
            'transactions' => $data,
        );
        return view('panel.transactions',$data);
    }
}
