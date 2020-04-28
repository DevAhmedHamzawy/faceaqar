<?php

namespace App\Http\Controllers\Admin;

use App\Estate;
use App\Ticket;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.tickets.index', ['tickets' => Ticket::all()]);
    }

   
    /**
     * Display the specified resource.
     *
     * @param  \App\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function show(Ticket $ticket, Estate $estate)
    {
        $payment_data = unserialize($ticket->payment_data);
        return view('admin.tickets.show', compact('ticket', 'payment_data','estate'));
    }

    public function activate(Ticket $ticket, Estate $estate)
    {
        $ticket->update(['payment_approval' => 1]);
        $estate->update(['premium_approval' => 1]);
        return redirect()->back();
    }

    public function deactivate(Ticket $ticket, Estate $estate)
    {
        $ticket->update(['payment_approval' => 0]);
        $estate->update(['premium_approval' => 0]);
        return redirect()->back();
    }
    

   
}
