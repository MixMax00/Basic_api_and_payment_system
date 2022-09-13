<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Brand;
use App\Models\Category;
use Cookie;


class FrontendController extends Controller
{
    public function index()
    {
    	$get_recent_product = json_decode(Cookie::get('recent_view_product'));
        if (!$get_recent_product) {
            $recents = Product::where('status', 0)->limit(8)->get();
        }else{
          $recent_product = array_unique($get_recent_product);
          $recents = Product::find($recent_product);  
        }


    	
    	
    	$categories = Category::limit(8)->get();
    	$brands = Brand::limit(4)->get();
    	$populers = Product::where('exclusive',1)->limit(4)->get();
    	$products = Product::where('status', 0)->limit(8)->get();
    	return view('Frontend.Home.home', compact('products','brands','populers','categories','recents'));
    }
}
