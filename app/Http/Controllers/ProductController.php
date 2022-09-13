<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Cookie;
use Illuminate\Support\Arr;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {

    	$Products = Product::where('status', 0)->limit(8)->get();
    	return view('Frontend.Product.index', compact('Products'));
    }

    public function details($id)
    {
    	$get_product_id = Cookie::get('recent_view_product');
    	if (!$get_product_id) {
    		$get_product_id = "[]";
    	}
    	$all_id  = json_decode($get_product_id, true);
    	$add_product_id = Arr::prepend($all_id, $id);
    	$after_decode = json_encode($add_product_id);

    	Cookie::queue('recent_view_product', $after_decode, 200);

    	$details = Product::find($id);
    	return view('Frontend.Product.details', compact('details'));
    }
}
