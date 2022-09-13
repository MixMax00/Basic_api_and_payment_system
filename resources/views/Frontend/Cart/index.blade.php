@extends('Frontend.master')


@section('content')


<div class="container">
	<div class="row mt-4 mb-4">
		<div class="card">
			<div class="card-header">
				<h5>Cart List</h5>
			</div>
			<div class="card-body">
				<table class="table">
				  <thead>
				    <tr>
				      <th scope="col">#</th>
				      <th scope="col">Product Name</th>
				      <th scope="col">Size</th>
				      <th scope="col">Color</th>
				      <th scope="col">Quantity</th>
				      <th scope="col">Price</th>
				    </tr>
				  </thead>
				  <tbody>

				  	@php($sum= 0)
				  	@foreach($carts as $cart)
					    <tr>
					      <th scope="row">{{ $loop->index +1 }}</th>
					      <td>{{ $cart->products->product_title }}</td>
					      <td>@if(isset($cart->sizes)) {{ $cart->sizes->name }} @endif</td>
					      <td>@if(isset($cart->colors)) {{ $cart->colors->name }} @endif</td>
					      <td>{{ $cart->quantity }}</td>
					      <td>{{ $total = $cart->price }} Tk</td>
					    </tr>

					    <?php $sum += $total ?>
					@endforeach
				  </tbody>
				</table>
			</div>
		</div>

		<div class="card mt-2 mb-2">
			<div class="card-body">
				<table border="1">
					<tr>
						<th>Total = </th>
						<td>{{ $sum }}</td>
					</tr>
				</table>
			</div>
		</div>

		<div class="card mt-2 mb-2">
			<div class="card-body">
				<table border="0" cellpadding="10" cellspacing="0" align="center"><tr><td align="center"></td></tr><tr><td align="center"><a href="https://www.paypal.com/in/webapps/mpp/paypal-popup" title="How PayPal Works" onclick="javascript:window.open('https://www.paypal.com/in/webapps/mpp/paypal-popup','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); return false;"><img src="https://www.paypalobjects.com/webstatic/mktg/Logo/pp-logo-200px.png" border="0" alt="PayPal Logo"></a></td></tr></table>
			</div>
		</div>
	</div>

	<div class="row">
			<a href="{{ route('payment.ssl') }}" class="btn btn-primary w-100 mb-2">SSL Payment Host Gateway</a>
			<a href="{{ route('payment.ajaxPay') }}" class="btn btn-primary w-100 mb-2">SSL Ajax Payment Gateway</a>
			<a href="{{ route('payment.stripe') }}" class="btn btn-info w-100 mb-2">Stripe Payment Gateway</a>
			<a href="{{ route('payment') }}" class="btn btn-warning w-100 mb-2">Paypal Payment Gateway</a>
	</div>

</div>



@endsection




@section('js')


<script>


</script>



@endsection