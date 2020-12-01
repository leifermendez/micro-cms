<?php

namespace App\Http\Controllers;

use App\contents;
use Illuminate\Http\Request;

class ContentController extends Controller
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
        return view('post.create');
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
            'description' => $request->description,
            'icon' => $request->icon,
            'big' => $request->big,
            'href' => $request->href,
            'link_name' => $request->link_name,
            'section' => $request->section
        );
        contents::insert($values);

        return redirect('admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return 'SHOW';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = contents::find($id);
        return view('post.edit',$data);
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
        $values = array(
            'title' => $request->title,
            'description' => $request->description,
            'icon' => $request->icon,
            'big' => $request->big,
            'href' => $request->href,
            'link_name' => $request->link_name,
            'section' => $request->section
        );
        contents::where('id',$id)->update($values);

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
        contents::where('id',$id)->delete();

        return redirect('admin');
    }
}
