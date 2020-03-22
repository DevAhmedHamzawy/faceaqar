<?php

namespace App\Http\Controllers;

use App\Broker;
use App\Traits\UploadFiles;
use Illuminate\Http\Request;

class BrokerController extends Controller
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
        return view('main.brokers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $request->merge(['area_id' => 1]);
        if($request->has('image')){
            $request->merge(['file' => UploadFiles::upload_broker_image($request->image, $request->name, 'brokers')]);
        }

        $broker_ad_sort = ['photosel' => 'صور', 'textopt' => 'كتابة نصية', 'socialopt' => 'حسابات التواصل الاجتماعي', 'advcartopt' => 'الكروت الاعلانية الالكترونية', 'mediaopt' => 'حجز صفحة اعلانية كاملة'];

        $request->merge(['broker_ad_sort' => $broker_ad_sort[$request->broker_ad_sort]]);
        Broker::create($request->except('g-recaptcha-response','agree','namefield1','mycheckbox','mycheckbox2','namefield7','image'));
        return redirect('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Broker  $broker
     * @return \Illuminate\Http\Response
     */
    public function show(Broker $broker)
    {
        return view('main.brokers.show', ['broker' => $broker]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Broker  $broker
     * @return \Illuminate\Http\Response
     */
    public function edit(Broker $broker)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Broker  $broker
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Broker $broker)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Broker  $broker
     * @return \Illuminate\Http\Response
     */
    public function destroy(Broker $broker)
    {
        //
    }
}
