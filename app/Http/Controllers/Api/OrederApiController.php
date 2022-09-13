<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Shipping;
use App\Models\OrderDetails;
use App\Models\Payment;
use App\Models\Cart;
use Carbon\Carbon;

class OrederApiController extends Controller
{
     public function orderCOD(Request $request)
    {
    	$request->validate([
    		"address" => "required",
    		"country" => "required",
    		"phone"   => "required",
    	]);

    	$transiction_id = uniqid();

    	$order = Order::create([
    		"name"           => auth()->user()->name,
    		"email"          => auth()->user()->email,
    		"phone"          => $request->phone,
    		"address"        => $request->address,
    		"amount"         => $request->amount,
    		"currency"       => "BDT",
    		"transaction_id" => $transiction_id,
    		"created_at"     => Carbon::now(),
    	]);


    	 Shipping::insert([
    		"order_id"   => $order->id,
    		"address"    => $request->address,
    		"phone"      => $request->phone,
    		"country"    => $request->country,
    		"created_at" => Carbon::now(),
    	]);


    	$carts = Cart::where('user_id', auth()->user()->id)->get();
        

    	// return response()->json([
     //    	"status"  => 201,
     //    	"message" => $carts
     //    ]);

        foreach($carts as $cart) {
        	
	    	OrderDetails::insert([
	    		"order_id"    =>$order->id,
	    		"product_id"  => $cart->product_id,
	    		"size_id"     => $cart->size_id,
	    		"color_id"    => $cart->color_id,
	    		"quantity"    => $cart->quantity,
	    		"price"       => $cart->price,
	    		"created_at"  => Carbon::now(),
	    	]);

	    	Cart::find($cart->id)->delete();
        }


        Payment::insert([
        	"order_id"   => $order->id,
        	"payment_id" => $order->transaction_id,
        	"created_at" => Carbon::now(),
        ]);

        return response()->json([
        	"status"  => 201,
        	"message" =>"COD Order successfully Done!!"
        ]);
    

      
    }
}
