<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;


class CartController extends Controller
{
    public function addCart(Request $request)
    {
    	if (auth()->user()){
    		echo "User";
    	}else{
    		Cart::insert([
                "user_id" => auth()->user()->id,
    			"product_id" => $request->product_id,
    			"size_id" => $request->color_id,
    			"color_id" => $request->size_id,
    			"quantity" => $request->quantity,
    			"price" => $request->price,
    		]);

    		return back();
    	}
    }


    public function cart()
    {
        $carts = Cart::with('products','sizes','colors')->get();

       // return $carts;
        return view('Frontend.Cart.index', compact('carts'));
    }
}
