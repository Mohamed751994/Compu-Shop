@extends('layout')
@section('content')


<section id="cart_items">
<div class="container">
	<div class="breadcrumbs">
		<ol class="breadcrumb">
		  <li><a href="#">Home</a></li>
		  <li class="active">Check out</li>
		</ol>
	</div><!--/breadcrums-->

	<div class="register-req">
		<p>Please Fill This Form.....</p>
	</div><!--/register-req-->
<div class="shopper-informations">
<div class="row">
	<div class="col-sm-2">
	</div>
<div class="col-sm-10 clearfix">
	<div class="bill-to">
		<p>Shipping Details : </p>
		<div class="form-one">
			<form action="{{ url('/store-shipping-details') }}" method="post">
				{{ csrf_field() }}
			  <input type="text" name="shipping_email" required="" placeholder="Email*">
			  <input type="text" name="shipping_first_name" required="" placeholder="First Name *">
		      <input type="text" name="shipping_last_name" required="" placeholder="Last Name *">
			  <input type="text" name="shipping_address" required="" placeholder="Address  *">
			  <input type="text" name="shipping_mobile_number" required="" placeholder="Mobile Number  *">
			  <input type="text" name="shipping_city" required="" placeholder="City  *">
			  <input type="submit" value="Do Checkout" class="btn btn-primary">
			</form>
		</div>
	</div>
</div>
					
</div>
</div>
</div>
</section> <!--/#cart_items-->


@endsection