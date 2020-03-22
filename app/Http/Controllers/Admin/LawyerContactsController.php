<?php

namespace App\Http\Controllers\Admin;

use App\Advertiser;
use App\LawyerContact;
use App\Notifications\MessageNotification;
use App\User;
use Illuminate\Http\Request;

class LawyerContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $ids =  LawyerContact::whereFrom(auth()->user()->id)->whereNotNull('to')->orderByDesc('created_at')->pluck('from','to');
       $messages = [];
       $i = 0;
       foreach($ids as $key => $value){
           if($i == 0) { $firstId = $key; }
           array_push($messages, LawyerContact::getLastChatMessage(auth()->user()->id, $key));
           $i++;
       }
       
       return view('admin.messages.index', ['messages' => $messages, 'latestmessage' => LawyerContact::getAChatMessages(auth()->user()->id, $firstId)]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->name == 'owner'){ $advertiser = Advertiser::findOrFail(auth()->user()->id); $request->merge(['name' => $advertiser->name, 'mobile' => $advertiser->mobile1, 'email' => $advertiser->email]); }
        !auth()->user() ? : $request->merge(['from' => auth()->user()->id]);
        $message = LawyerContact::create($request->all());
        $reciever = User::findOrFail($request->to);
        $reciever->notify(new MessageNotification($request->from, $request->to, $request->body));
        return $message;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function show($user, $from, $to)
    {
        $temp = '';
        if( $to ==  auth()->user()->id ) { $temp = $from; $from = $to; $to = $temp; }
        return LawyerContact::getAChatMessages(auth()->user()->id, $to);
    }
}
