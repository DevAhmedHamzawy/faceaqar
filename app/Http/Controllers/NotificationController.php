<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NotificationController extends Controller
{
    public function index()
    {
        $notifications =  DB::table('notifications')->whereNotifiableId(auth()->user()->id)->get();
        return view('main.home.notifications', compact('notifications'));
    }

    public function read(Request $request)
    {
        DB::table('notifications')->whereId($request->id)->update(['read_at' => Carbon::now()]);
        return 'done';
    }


}
