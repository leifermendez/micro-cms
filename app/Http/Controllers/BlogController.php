<?php

namespace App\Http\Controllers;

use App\blog;
use App\contents;
use App\menu;
use App\notifactions;
use App\services;
use App\setting;
use App\sliders;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = blog::orderBy('id','desc')->get();

        $data = array(
            'blogs' => $blogs
        );

        return view('panel.index_blog',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = array(
            'services' => services::orderBy('id','desc')->get()
        );
        return view('panel.create_blog',$data);
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
            'description' => $request->description,
            'service' => $request->service,
            'created_at' => Carbon::now()->toDateString(),
            'image' => $request->image
        );

        blog::insert($values);

        return redirect('admin/blog');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id,$ref=null)
    {

        $metas = setting::where('meta',1)->get();
        $options = setting::where('meta',0)->get();
        $menus = menu::all();


        $notifications = notifactions::whereDate('start_at','<=',Carbon::today()->toDateString())
            ->whereDate('end_at','>',Carbon::today()->toDateString())
            ->get();

        $data = blog::find($id);
        $service = services::find($data->service);
        return view('blog.show',[
            'metas'=>$metas,
            'options'=>$options,
            'menus' => $menus,
            'data' => $data,
            'ref' => $ref,
            'service' => $service,
            'notifications' => $notifications
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
        $blog = blog::find($id);
        $data = array(
            'blog' => $blog,
            'services' => services::orderBy('id','desc')->get()
        );

        return view('panel.edit_blog',$data);
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
        blog::where('id',$id)->update(array(
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'description' => $request->description,
            'image' => $request->image,
            'service' => $request->service
        ));

        return redirect('admin/blog');
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
