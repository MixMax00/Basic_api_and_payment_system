@extends('Frontend.master')


@section('content')


<div class="container">

  <div class="row mt-4">
  	<div class="col-12 col-sm-4 col-md-3 col-lg-3 mb-3">
  		<h3 class="bg-title">{{ __('text.category') }}</h3>

  		<div>
  				
  			<ul style="list-style-type: none">

  				@foreach($categories as $category)
  				 <li class="text-color">{{ $category->name }}</li>
  			    @endforeach	
  			</ul>
  		</div>
  	</div>
  	<div class="col-12 col-sm-8 col-md-9 col-lg-9 mb-3">
  		<div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img src="https://soliloquywp.com/wp-content/uploads/2018/11/nb_ist_cover.jpg" class="d-block w-100" alt="..." height="250px">
		    </div>
		    <div class="carousel-item">
		      <img src="https://soliloquywp.com/wp-content/uploads/2018/11/nb_ist_cover.jpg" class="d-block w-100" alt="..." height="250px">
		    </div>
		    <div class="carousel-item">
		      <img src="https://soliloquywp.com/wp-content/uploads/2018/11/nb_ist_cover.jpg" class="d-block w-100" alt="..." height="250px">
		    </div>
		  </div>
		  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="visually-hidden">Previous</span>
		  </button>
		  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="visually-hidden">Next</span>
		  </button>
		</div>
  	</div>
  </div>

  <div class="row mt-3 mb-3">
  	<div class="title mb-3">
  		<h3 class="bg-title">{{ __('text.brand') }}</h3>
  	</div>

  	@foreach($brands as $brand)
	  	<div class="col-12 col-sm-8 col-md-3 col-lg-3 mb-3">
	  		<div class="card">
	  			<img src="{{ asset('Frontend/img/brand.png') }}" class="rounded mx-auto d-block" alt="..." width="100px" height="100px">
	  		    <h5 class="text-center text-color">{{ $brand->name }}</h5>
	  		</div>
	  	</div>
	@endforeach
  </div>


    <div class="row">
  	    <div class="title mb-3">
  		  <h3 class="bg-title">{{ __('text.populer') }}</h3>
  	    </div>
  	    @foreach($populers as $populer)
	  	    <div class="col-12 col-sm-8 col-md-3 col-lg-3 mb-3">
	  		    <div class="card">
		      
			        <img class="card-img" src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/vans.png" alt="Vans">
			        <div class="card-body">
			          <h4 class="card-title">{{ Str::limit($populer->product_title, 10, '.') }}</h4>
			          <div class="d-flex align-items-center">
			             <button id="addToCart" class="btn btn-danger mt-3">{{ __('text.order_now') }} </button>
			           
			           <!--   <a href="javascript:void(0)" id="demo" class="card-link text-danger like">Click</a> -->
			          </div>
			     </div>
		      </div>
	  	    </div>
	  	@endforeach    
    </div>


  <div class="row mt-4">
  	<div class="title mb-3">
  		<h3 class="bg-title">{{ __('text.product') }}</h3>
  	</div>

	@foreach($products as $product)  
        <div class="col-12 col-sm-8 col-md-6 col-lg-4 mb-3">
        <a class="nav-link" href="{{ route('product.details', ["id"=>$product->id]) }}">	
	      <div class="card text-color">
				<form action="{{ route('add.cart') }}" method="post">
					@csrf
		      		<input type="hidden" name="product_id" id="product_id" value="{{ $product->id }}">
			        <img class="card-img" src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/vans.png" alt="Vans">
			        <div class="card-body">
			          <h4 class="card-title">{{  Str::limit($product->product_title, 20, '...') }}</h4>
			          <p class="card-text">
			           {{ Str::limit($product->short_description, 30, '...') }}            </p>
			          <div class=" d-flex pl-3">
			            <input type="text" name="color_id" class="form-control w-50" value="{{ $product->color }}">
			            <input type="text" name="size_id" class="form-control w-50" value="{{ $product->size }}">
			            <input type="hidden" name="quantity" value="{{ $product->qunatity }}">
			            <input type="hidden" name="price" value="{{ $product->price }}">
			          </div>
			          <div class="d-flex justify-content-between align-items-center">
			            <div class="price text-success"><h5 class="mt-4">Tk. {{ $product->price }}</h5></div>
			             <input type="submit" value="{{ __('text.add_to_cart') }}" class="btn btn-warning">
			          </div>
			        </div>
	     		</form>	        
	     	</div>
	     </a>
	    </div>
	    
	@endforeach

  </div>
   <div class="row mt-4 mb-4">
  	    <div class="title mb-3">
  		  <h3 class="bg-title">{{ __('text.recent_view') }}</h3>
  	    </div>
		    
		
  	    @foreach($recents as $recent)
	  	    <div class="col-12 col-sm-8 col-md-3 col-lg-3 mb-3">
	  		    <div class="card">
		      
			        <img class="card-img" src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/vans.png" alt="Vans">
			        <div class="card-body">
			          <h4 class="card-title">{{ Str::limit($recent->product_title, 10, '.') }}</h4>
			          <div class="d-flex align-items-center">
			             <button id="addToCart" class="btn btn-danger mt-3">{{ __('text.order_now') }} </button>
			           
			           <!--   <a href="javascript:void(0)" id="demo" class="card-link text-danger like">Click</a> -->
			          </div>
			     </div>
		      </div>
	  	    </div>

	  	@endforeach  


  	
    </div>
</div>

@endsection



