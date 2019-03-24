@extends('layout')
@section('content')

<section id="form"><!--form-->
<div class="container">
<div class="row">
	<div class="col-sm-3 col-sm-offset-1">
		<div class="login-form"><!--login form-->
			<h2>Login to your account</h2>
			<form action="{{ URL::to('/customer_login') }}" method="post">
				{{ csrf_field() }}
				<input type="email" name="customer_email" placeholder="Your Email" required="" />
				<input type="password" name="password" placeholder="Your Password" required="" />
				<button type="submit" class="btn btn-default">Login</button>
			</form>
		</div><!--/login form-->
	</div>
	<div class="col-sm-1">
		<h2 class="or">OR</h2>
	</div>
	<div class="col-sm-3">
		<div class="signup-form"><!--sign up form-->
			<h2>New User Signup!</h2>
			<form action="{{ URL::to('/customer_register') }}" method="post">
				{{ csrf_field() }}
				<input type="text" name="customer_name" placeholder="Full Name"/>
				<input type="email" placeholder="Customer Email" name="customer_email" />
				<input type="password" name="password" placeholder="Password"/>
				<input type="text" placeholder="Mobile Number" name="customer_mobile" />
				<button type="submit" class="btn btn-default">Signup</button>
			</form>
		</div><!--/sign up form-->
	</div>
</div>
</div>
</section><!--/form-->











@endsection