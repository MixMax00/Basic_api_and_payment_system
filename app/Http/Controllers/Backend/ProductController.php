<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Size;
use App\Models\Color;
use App\Models\Product;
use Auth;
use Carbon\Carbon;

class ProductController extends Controller
{


   // Product view methode

  
   public function index()
   {

   	  
       $all_products  = Product::all();
   	
   	  return view('Backend.Product.product', compact('all_products'));
   }

 	// Product add method
   public function create()
   {

	  $brands = Brand::all();
   	  $categories = Category::all();
   	  $colors = Color::all();
   	  $sizes = Size::all();
   	  return view('Backend.Product.create', compact('brands','categories','colors','sizes'));
	   
   	
   }



   // Product save method
   public function store(Request $request)
   {

   		// validation require must be

	   	$this->validate($request,[
	         'product_title'=>'required',
	         'qunatity'=>'required',
	         'price'=>'required',
	         'discount_price'=>'required',
	         'short_description'=>'required',
	         'image'=>'required',
	     ]);

	   	if($request->hasFile('image')){
	   		$image = $request->file('image');
	   		$ext = $image->getClientOriginalExtension();
	   		$imgName = time()."-"."Img".".".$ext;
	   		$saveUrl = public_path('upload/'.$imgName);
	   		$url  = public_path('upload/');
	   		$image->move($url,$imgName);

	   		Product::insert([
	   			"product_title" => $request->product_title,
	   			"user_id" => Auth::user()->id,
	   			"brand_id" => $request->brand_id,
	   			"category_id" => $request->category_id,
	   			"color" => $request->color,
	   			"size" => $request->size,
	   			"qunatity" => $request->qunatity,
	   			"price" => $request->price,
	   			"sell_price" => $request->discount_price,
	   			"short_description" => $request->short_description,
	   			"long_description" => $request->long_description,
	   			"image" => $saveUrl,
	   			"created_at" => Carbon::now()
	   	  ]);
	   	}


	   	return redirect()->route('admin.product');
   	  
   }


   // Product edit method
    public function edit()
   {
   	  return view('Backend.Product.edit');
   }

   // Product save method
   public function update(Request $request)
   {
   	  
   }

    // Product delete method
    public function destroy()
   {
   	  
   }


}
