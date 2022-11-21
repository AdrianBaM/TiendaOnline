<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        $cartCollection = \Cart::getContent();
        //dd($cartCollection);
        return view('checkout')->with('success_msg', 'Item is removed!');
    }

    public function clear(){
        \Cart::clear();
        return redirect()->route('cart.index')->with('success_msg', 'Car is cleared!');
    }
}
