@extends('Frontend.master')


@section('content')

<div class="container">
  <div class="row mt-4">

	@foreach($Products as $product)  
        <div class="col-12 col-sm-8 col-md-6 col-lg-4 mb-3">
        <a href="{{ route('product.details', ["id"=>$product->id]) }}">	
	      <div class="card">
	        <img class="card-img" src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/vans.png" alt="Vans">
	        <div class="card-img-overlay d-flex justify-content-end">
	        </div>
	        <div class="card-body">
	          <h4 class="card-title">{{  Str::limit($product->product_title, 20, '...') }}</h4>
	          <p class="card-text">
	           {{ Str::limit($product->short_description, 30, '...') }}            </p>
	          <div class="options d-flex flex-fill">
	             <select class="custom-select mr-1">
	                <option value="{{ $product->color }}">{{ $product->color }}</option>
	            </select>
	            <select class="custom-select ml-1">
	               <option value="{{ $product->size }}">{{ $product->size }}</option>
	            </select>
	          </div>
	          <div class="d-flex justify-content-between align-items-center">
	            <div class="price text-success"><h5 class="mt-4">{{ $product->price }}</h5></div>
	             <button type="button" class="btn btn-danger mt-3">Add to Cart</button>
	          </div>
	        </div>
	      </div>
	      </a>
	    </div>
	@endforeach
  </div>
</div>

@endsection