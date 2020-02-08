<?php

namespace App\Http\Controllers\Admin;

use App\Mail\SendNewsLetterMessage;
use App\NewsLetter;
use Illuminate\Http\Request;

class NewsLetterController extends Controller
{
    public function index()
    {
        return view('admin.newsletter.index', ['newsletters' => NewsLetter::all()]);
    }

    public function store(Request $request)
    {
        $request->merge(['area_id' => 0]);
        Contact::create($request->except('receiver_email','receiver_name'));

        Mail::to($request->receiver_email)->send(new SendNewsLetterMessage($request->name, $request->receiver_name, $request->message));
    }
}
