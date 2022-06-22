<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Cart;

class CheckoutController extends Controller
{
    public function checkout_index()
    {
        

        $valuee = Session::put('checkout',[

            'subtotal' => Cart::subtotal(),
            'tax'=> Cart::tax(),
            'total'=> Cart::total(),

        ]);


        dd($valuee);
        return view('checkout');
    }

    

    

}
