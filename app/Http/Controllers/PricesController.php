<?php

namespace App\Http\Controllers;

use App\blog;
use App\services;
use Illuminate\Http\Request;

class PricesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array(
            'products' => services::orderBy('id','desc')->get(),
            'blogs' => blog::orderBy('id','desc')->get()
        );
        return view('panel.index_products',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('prices.create');
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
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'price' => $request->price,
            'short_description' => $request->short_description,
            'description' => $request->description,
            'href' => $request->href
        );

        services::insert($values);

        return redirect('admin/products');
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
        if(!services::where('id',$id)->exists()){
            return redirect('admin/products');
        }
        $data = array(
            'product' => services::find($id),
            'blogs' => blog::orderBy('id','desc')->get()
        );
        return view('panel.edit_products',$data);
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
        if(!services::where('id',$id)->exists()){
            return redirect('admin/products');
        }
        $values = array(
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'price' => floatval($request->price),
            'short_description' => $request->short_description,
            'description' => $request->description,
            'href' => $request->href
        );
        services::where('id',$id)->update($values);

        return redirect('admin/products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        services::where('id',$id)->delete();

        return redirect('admin/products');
    }
}
