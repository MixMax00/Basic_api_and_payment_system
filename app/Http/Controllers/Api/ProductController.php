<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
   public function index()
   {
   		$products = Product::where('status', 0)->get();
   	    return response()->json([
   	    	"status" => true,
   	    	"product" => $products
   	    ]);
   }


   public function details($id)
   {

		$products = Product::find($id);
	  	return response()->json([
	  		"status" => true,
	  		"product" => $products
	  	]);

   }

   public function feature()
   {
      $feature = Product::where('feature', 1)->get();
          return response()->json([
            "status" => true,
            "feature" => $feature
          ]);
   }

   public function trending()
   {
      $trending = Product::where('trends', 1)->get();
          return response()->json([
            "status" => true,
            "trending" => $trending
          ]);
   }

   public function exclusive()
   {
      $exclusive = Product::where('exclusive', 1)->get();
          return response()->json([
            "status" => true,
            "exclusive" => $exclusive
          ]);
   }

   public function banners()
   {
      $banners = Product::where('banner', 1)->get();
          return response()->json([
            "status" => true,
            "banners" => $banners
          ]);
   }
}
