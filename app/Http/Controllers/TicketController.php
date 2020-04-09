<?php

namespace App\Http\Controllers;

use App\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function create($ticket_sort,$ad_sort,$name)
    {
        return view('main.tickets.create', compact('ticket_sort','ad_sort','name'));
    }

    public function show($id)
    {
        $ticket = Ticket::findOrFail($id);
        $payment_data = unserialize($ticket->payment_data);
        return view('main.tickets.show', compact('ticket', 'payment_data'));
    }
}