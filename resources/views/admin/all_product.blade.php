@extends('admin_layout')
@section('admin_content')


<ul class="breadcrumb">
	<li>
		<i class="icon-home"></i>
		<a href="index.html">Home</a> 
		<i class="icon-angle-right"></i>
	</li>
	<li><a href="{{ URL::to('/all-product') }}">All Products</a></li>
</ul>
	<p class="alert-success">
			<?php 
				$message = Session::get('message');
				if ($message) {
					echo $message;
					Session::put('message', null);
				}

			?>
		 </p>
<div class="row-fluid sortable">		
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon user"></i><span class="break"></span>Products</h2>
		
		</div>
		<div class="box-content">
			<table class="table table-striped table-bordered bootstrap-datatable datatable">
			  <thead>
				  <tr>
					  <th>Product ID</th>
					  <th>Product Name</th>
					  <th>Product Image</th>
					  <th>Product Price</th>
					  <th>Category Name</th>
					  <th>Manufacture Name</th>
					  <th>Status</th>
					  <th>Actions</th>
				  </tr>
			  </thead> 
			  @foreach($products as $product)  
			  <tbody>
				<tr>
					<td>{{ $product->product_id }}</td>
					<td class="center">{{ $product->product_name }}</td>
					<td><img src="{{ URL::to($product->product_image) }}" style="height: 70px; width: 70px;"></td>
					<td>{{ $product->product_price }}</td>
					<td>{{ $product->category_name }}</td>
					<td>{{ $product->manufacture_name }}</td>
					<td class="center">
						@if($product->publication_status == 1)
						<span class="label label-success">Active</span>
						@else
						<span class="label label-danger">Unactive</span>
						@endif
					</td>
					<td class="center">
						@if($product->publication_status == 1)
						<a class="btn btn-danger" href="{{ URL::to('/unactive_product/'. $product->product_id) }}">
							<i class="halflings-icon white thumbs-down"></i>  
						</a>
						@else
						<a class="btn btn-success" href="{{ URL::to('/active_product/'. $product->product_id) }}">
							<i class="halflings-icon white thumbs-up"></i>  
						</a>
						@endif
						<a class="btn btn-info" href="{{ URL::to('/edit-product/'. $product->product_id) }}">
							<i class="halflings-icon white edit"></i>  
						</a>
						<a class="btn btn-danger" href="{{ URL::to('/delete-product/'. $product->product_id) }}" id="delete">
							<i class="halflings-icon white trash"></i> 
						</a>
					</td>
				</tr>	
			  </tbody>
			  @endforeach
		  </table>            
		</div>
	</div><!--/span-->

</div><!--/row-->





@endsection