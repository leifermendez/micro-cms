<?php

namespace App\Http\Controllers;

use App\comments;
use App\contents;
use App\customers;
use App\menu;
use App\notifactions;
use App\popupAds;
use App\services;
use App\setting;
use App\sliders;
use Carbon\Carbon;
use Torann\GeoIP\GeoIP;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    function toAscii($str=null) {
        $clean = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $str);
        $clean = strtolower(trim($clean, '-'));
        $clean = preg_replace("/[\/_|+ -]+/", '-', $clean);

        return $clean;
    }

    public function index()
    {

        $contents_block = array();
        $services_block = array();
        $i = 0;
        $c = 0;
        $metas = setting::where('meta',1)->get();
        $options = setting::where('meta',0)->get();
        $menus = menu::all();
        $sliders = sliders::orderBy('id','desc')->get();
        $contentsbig = contents::orderBy('id','desc')->where('big',1)->get();
        $contents = contents::orderBy('id','desc')->where('big',0)->get();
        $services = services::all();
        $comments = comments::orderBy('id','desc')->get();

        foreach ($contents as $content){

            if(($i) % 3 == 0){
                $c++;
                $contents_block[$c][] = $content;
            }else{
                $contents_block[$c][] = $content;
            }
            $i++;
        }

        $c = 0;
        $i = 0;

        foreach ($services as $service){
            $service->setAttribute('friendly',$this->toAscii($service->title));
            if(($i) % 3 == 0){
                $c++;
                $services_block[$c][] = $service;
            }else{
                $services_block[$c][] = $service;
            }
            $i++;
        }

        $notifications = notifactions::whereDate('start_at','<=',Carbon::today()->toDateString())
            ->whereDate('end_at','>',Carbon::today()->toDateString())
            ->get();

        $customers = customers::all();
        $geo_data=geoip()->getLocation();

        $popupAd = null;
        if(popupAds::where('continent',$geo_data['continent'])->exists()){
            $popupAd = popupAds::where('continent',$geo_data['continent'])->first();
        }

        return view('welcome',[
            'metas'=>$metas,
            'options'=>$options,
            'menus' => $menus,
            'notifications' => $notifications,
            'sliders' => $sliders,
            'contentsbig' => $contentsbig,
            'contents_block' => $contents_block,
            'services_block' => $services_block,
            'services' => $services,
            'comments' => $comments,
            'customers' => $customers,
            'geo_data' => $geo_data,
            'popupAd' => $popupAd
            ]);
    }
}
