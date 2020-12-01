<?php

namespace App\Http\Controllers;

use App\coupons;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CouponsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array(
            'coupons' => coupons::orderBy('coupons.id','desc')
                ->leftJoin('transactions','coupons.code','=','transactions.coupon')
                ->select(DB::raw('count(*) as use_coupons, coupons.*'))
                ->groupBy('id')
                ->get(),
        );

        return view('panel.index_coupons',$data);
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
        $values = array(
            'created_at' => Carbon::now()->toDateString(),
            'code' => $request->code,
            'limit' => $request->limit,
            'type' => $request->type,
            'amount' => $request->amount
        );

        coupons::insert($values);

        return redirect('admin/coupons');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        coupons::where('id',$id)->delete();

        return redirect('admin/coupons');
    }
}
