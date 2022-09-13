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
					<table class="table table-striped table-hover">
						<thead>
					    <tr>
					      <th scope="col">#</th>
					      <th scope="col">Product Name</th>
					      <th scope="col">Quantity</th>
					      <th scope="col">Price</th>
					       <th scope="col">Action</th>
					    </tr>
					  </thead>
					  <tbody>

					  	@foreach($all_products as  $products)
					    <tr>
					      <th scope="row">{{ $loop->index +1 }}</th>
					      <td>{{ Str::limit($products->product_title, '10','.') }}</td>
					      <td>{{ $products->qunatity }}</td>
					      <td>{{ $products->price }}</td>
					      <td>
					      	 <a href="" class="btn btn-danger btn-sm">Delete</a>
					      </td>
					    </tr>

					    @endforeach
					  </tbody>
  				    </table>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection