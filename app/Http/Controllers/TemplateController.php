<?php

namespace App\Http\Controllers;

use App\templates;
use Illuminate\Http\Request;

class TemplateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array(
            'templates' => templates::orderBy('id','desc')->get()
        );

        return view('panel.index_templates',$data);
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
        //
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
        $data = templates::find($id);
        return view('panel.edit_templates',$data);
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

    public function send(Request $request){

        $template = templates::find($request->id_template);
        $template_content = str_replace('@name@',$request->name,$template->content);
        $template_content = str_replace('@web@',$request->web,$template_content);
        $template_content = str_replace('@description@',$request->description,$template_content);
        $template_content = str_replace('@coupon@',$request->coupon,$template_content);

        if($request->file('attachments')){
            $path = $request->file('attachments')->store('attachments','public');
            $path = storage_path().'/app/public/'.$path;

        }else{
            $path = null;
        }

        $data = array(
            'template' => $template,
            'template_content' => $template_content,
            'request_values' => $request,
            'email' => $request->to,
            'attachment' => $path
        );

        (new MailController)->single($data,'clean');

        return redirect('admin/templates');
    }
}
