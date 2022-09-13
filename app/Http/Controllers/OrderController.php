<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function ssl(){
    	 return view('exampleHosted');
    	 //return view('exampleEasycheckout');
    }

    public function ajaxPay(){
         //return view('exampleHosted');
         return view('exampleEasycheckout');
    }

    
    public function stripe(){
    	return view('Frontend.Stripe.stripe');
    	 //return view('exampleEasycheckout');
    }

}
