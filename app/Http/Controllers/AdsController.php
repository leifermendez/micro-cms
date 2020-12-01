<?php

namespace App\Http\Controllers;

use App\popupAds;
use Illuminate\Http\Request;

class AdsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array(
            'ads' => popupAds::orderBy('id','desc')->get()
        );
        return view('panel.index_ads',$data);
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
        $data = array(
            'name' => $request->name,
            'image' => $request->image,
            'href' => $request->href,
            'continent' => $request->continent,
            'currency' => $request->currency
        );

        popupAds::insert($data);
        return redirect('admin/ads');
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
        $data = popupAds::find($id);
        return view('panel.edit_ads',$data);
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
        $data = array(
            'name' => $request->name,
            'image' => $request->image,
            'continent' => $request->continent,
            'href' => $request->href,
            'currency' => $request->currency
        );

        popupAds::where('id',$id)->update($data);
        return redirect('admin/ads');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        popupAds::where('id',$id)->delete();
        return redirect('admin/ads');
    }
}
