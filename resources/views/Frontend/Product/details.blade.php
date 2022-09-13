@extends('Frontend.master')


@section('content')

<div class="container">
	<div class="row mt-4">
		<div class="card p-2">
			<div class="row">
				<div class="col-6">
					<img class="card-img" src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/vans.png" alt="Vans" height="300px">
				</div>
				<div class="col-6">
					<h3>{{ $details->product_title }}</h3>
					<p>{{ $details->short_description }}</p>

					<p>{{ __('text.brand')}}: {{ $details->brand_id }}</p>
					<p>Category: {{ $details->category_id }}</p>
					<p><span>Color: {{ $details->color }}</span> <span>Size: {{ $details->size }}</span></p>
					<input type="text" name="qantity"><span>Quantity</span><p>Price : {{ $details->price }}</p>
					<button class="btn btn-warning">{{ __('text.add_to_cart') }}</button>
				</div>
			</div>
		</div>
	</div>
</div>


@endsection