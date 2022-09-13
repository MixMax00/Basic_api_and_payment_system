@extends('layouts.app')


@section('content')

<div class="container">
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-header">
					<h3>Product List</h3>
				</div>
				<div class="card-body">

					 @if (count($errors) > 0)
				         <div class = "alert alert-danger">
				            <ul>
				               @foreach ($errors->all() as $error)
				                  <li>{{ $error }}</li>
				               @endforeach
				            </ul>
				         </div>
				      @endif
					<form class="" action="{{ route('product.save') }}" method="POST" enctype="multipart/form-data">
						@csrf
						<div class="form-floating mb-3">
						  <input type="text" class="form-control" name="product_title" id="floatingInput" placeholder="product name">
						  <label for="floatingInput">Product Name</label>
						</div>
						<div class="form-floating mb-3">
						  <select class="form-select" name="brnad_id" id="floatingSelect" aria-label="Floating label select example"> 	
						  	@foreach($brands as $brand)
						    
						    <option value="{{ $brand->id }}">{{ $brand->name }}</option>
						    @endforeach
						  </select>
						  <label for="floatingSelect">Brand</label>
						</div>

						<div class="form-floating mb-3">
						  <select class="form-select" name="category_id" id="floatingSelect" aria-label="Floating label select example">
						
						    @foreach($categories as $category)
						    <option value="{{ $category->id }}">{{ $category->name  }}</option>
						    @endforeach
						  </select>
						  <label for="floatingSelect">Category</label>
						</div>
						<div class="row g-2 mb-3">
							  <div class="col-md">
							    <div class="form-floating">
							     <select class="form-select" name="size" id="floatingSelectGrid" aria-label="Floating label select example">
							         @foreach($sizes as $size)
							        <option value="{{ $size->id }}">{{ $size->name }}</option>
							        
							        @endforeach
							      </select>
							      <label for="floatingSelectGrid">Size with selects</label>
							    </div>
							  </div>
							  <div class="col-md">
							    <div class="form-floating">
							      <select class="form-select" name="color" id="floatingSelectGrid" aria-label="Floating label select example">
							        @foreach($colors as $color)
							        <option value="{{ $color->id }}">{{ $color->name }}</option>
							        
							        @endforeach
							      </select>
							      <label for="floatingSelectGrid">Size with selects</label>
							    </div>
							  </div>
							</div>
						<div class="form-floating mb-3">
						  <input type="number" class="form-control" name="price" id="floatingInput" placeholder="product name">
						  <label for="floatingInput">Price</label>
						</div>
						<div class="form-floating mb-3">
						  <input type="number" class="form-control" name="discount_price" id="floatingInput" placeholder="product name">
						  <label for="floatingInput">Discount Price</label>
						</div>
						<div class="form-floating mb-3">
						  <input type="number" name="qunatity" class="form-control" name="quantity" id="floatingInput" placeholder="product name">
						  <label for="floatingInput">Quantity</label>
						</div>
						<div class="form-floating mb-3">
						  <textarea class="form-control" name="short_description" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                         <label for="floatingTextarea">Short Description</label>
						</div>
						<div class="form-floating mb-3">
						 <textarea class="form-control" name="long_description" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                         <label for="floatingTextarea">Description</label>
						 
						</div>

						<div class="form-floating mb-3">
						  <input type="file" class="form-control" name="image" id="floatingInput" placeholder="product name">
						  
						</div>

						<div class="form-floating mb-3">
						  <input type="submit" class="btn btn-primary"  value="Save">
						  
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection