<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;

class CartController extends Controller
{
    public function addCart(Request $request)
    {
    	$request->validate([
			"product_id" =>  "required",
			"size_id"    =>  "required",
			"color_id"   =>  "required",
			"quantity"   =>  "required",
			"price"      =>  "required",

    	]);
    	
		$cart_product = Cart::insertGetId([
			"user_id" => auth()->user()->id,
			"product_id" => $request->product_id,
			"size_id" => $request->color_id,
			"color_id" => $request->size_id,
			"quantity" => $request->quantity,
			"price" => $request->price,
		]);


		return response()->json([
			"status" => 201,
			"cart"   => $cart_product
		]);	
    	
    }
}
