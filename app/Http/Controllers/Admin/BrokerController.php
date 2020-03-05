<?php

namespace App\Http\Controllers\Admin;

use App\Broker;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BrokerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.brokers.index', ['brokers' => Broker::all()]);
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
