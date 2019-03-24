@extends('admin_layout')
@section('admin_content')

	<ul class="breadcrumb">
		<li>
			<i class="icon-home"></i>
			<a href="index.html">Home</a> 
			<i class="icon-angle-right"></i>
		</li>
		<li><a href="#">Dashboard</a></li>
	</ul>

	<div class="row-fluid">
		
		<div class="span3 statbox purple" onTablet="span6" onDesktop="span3">
			<div class="boxchart">5,6,7,2,0,4,2,4,8,2,3,3,2</div>
			<div class="number">24<i class="icon-arrow-up"></i></div>
			<div class="title">Customers</div>
			
		</div>
		<div class="span3 statbox green" onTablet="span6" onDesktop="span3">
			<div class="boxchart">1,2,6,4,0,8,2,4,5,3,1,7,5</div>
			<div class="number">123<i class="icon-arrow-up"></i></div>
			<div class="title">Sales</div>
			
		</div>
		<div class="span3 statbox blue noMargin" onTablet="span6" onDesktop="span3">
			<div class="boxchart">5,6,7,2,0,-4,-2,4,8,2,3,3,2</div>
			<div class="number">982<i class="icon-arrow-up"></i></div>
			<div class="title">Orders</div>
			
		</div>
		<div class="span3 statbox yellow" onTablet="span6" onDesktop="span3">
			<div class="boxchart">7,2,2,2,1,-4,-2,4,8,,0,3,3,5</div>
			<div class="number"><i class="icon-arrow-down"></i></div>
			<div class="title">Products</div>
		</div>	
		
	</div>		

	<br>
	<br>
	<br>
	
	
	
	<div class="row-fluid">	
		
		<a class="quick-button metro blue span2"  href="{{ url('/manage-order') }}">
			<i class="icon-shopping-cart"></i>
			<p>Orders</p>
			<span class="badge">13</span>
		</a>
		<a class="quick-button metro green span2" href="{{ url('/all-product') }}">
			<i class="icon-barcode"></i>
			<p>Products</p>
		</a>
		<a class="quick-button metro pink span2" href="{{ url('/messages') }}">
			<i class="icon-envelope"></i>
			<p>Messages Info</p>
			<span class="badge">88</span>
		</a>
		
		
		<div class="clearfix"></div>
						
	</div><!--/row-->
	
       

	


@endsection