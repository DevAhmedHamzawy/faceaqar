<?php

namespace App\Http\Controllers;

use App\Estate;
use App\Ticket;
use Illuminate\Http\Request;
use Srmklive\PayPal\Services\ExpressCheckout;

class PaymentController extends Controller
{
    protected $provider;

    public function __construct()
    {
        $this->provider = new ExpressCheckout();
    }

    public function store(Request $request)
    {
        if($request->payment_method == "0"){
        $data = [];
        $data['items'] = [['name' => $request->name, 'price' => $request->price, 'desc'  => $request->description, 'qty' => $request->qty]];
  
        $data['invoice_id'] = 1;
        $data['invoice_description'] = "Order #{$data['invoice_id']} Invoice";
        $data['return_url'] = route('payment.success');
        $data['cancel_url'] = route('payment.cancel');
        $data['total'] = $request->price;
  
        $this->provider = new ExpressCheckout;
  
        $response = $this->provider->setExpressCheckout($data);
  
        $response = $this->provider->setExpressCheckout($data, true);
  
        return redirect($response['paypal_link']);
    }else{

        $item_id = Estate::whereName($request->item_name)->first()->id;

        $request->merge(['user_id' => auth()->user()->id, 'membership_id' => $item_id]);
        $payment_data = serialize($request->except(['user_id', 'membership_id']));

        Ticket::create(['user_id' => auth()->user()->id, 'membership_id' => $item_id, 'payment_data' => $payment_data]);

        return 'done';

    }
    }

    public function success(Request $request)
    {
        $response = $this->provider->getExpressCheckoutDetails($request->token);
  
        if (in_array(strtoupper($response['ACK']), ['SUCCESS', 'SUCCESSWITHWARNING'])) {
            $request->merge(['user_id' => auth()->user()->id, 'membership_id' => 1]);
            $payment_data = serialize($response);
    
            Ticket::create(['user_id' => auth()->user()->id, 'membership_id' => 1, 'payment_data' => $payment_data]);
        }
  
    }

    public function cancel()
    {
        return 'cancel';
    }

}
