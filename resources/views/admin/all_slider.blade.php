@extends('admin_layout')
@section('admin_content')


<ul class="breadcrumb">
	<li>
		<i class="icon-home"></i>
		<a href="index.html">Home</a> 
		<i class="icon-angle-right"></i>
	</li>
	<li><a href="{{ URL::to('/all-product') }}">All Sliders</a></li>
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
			<h2><i class="halflings-icon user"></i><span class="break"></span>Sliders</h2>
		
		</div>
		<div class="box-content">
			<table class="table table-striped table-bordered bootstrap-datatable datatable">
			  <thead>
				  <tr>
				  	  <th>Slider ID</th>
					  <th>Slider Image</th>
					  <th>Status</th>
					  <th>Actions</th>
				  </tr>
			  </thead> 
			  @foreach($sliders as $slider)  
			  <tbody>
				<tr>
					<td>{{ $slider->slider_id }}</td>
					
					<td><img src="{{ URL::to($slider->slider_image) }}" style="height: 80px; width: 190px;"></td>
					
					<td class="center">
						@if($slider->publication_status == 1)
						<span class="label label-success">Active</span>
						@else
						<span class="label label-danger">Unactive</span>
						@endif
					</td>
					<td class="center">
						@if($slider->publication_status == 1)
						<a class="btn btn-danger" href="{{ URL::to('/unactive_slider/'. $slider->slider_id) }}">
							<i class="halflings-icon white thumbs-down"></i>  
						</a>
						@else
						<a class="btn btn-success" href="{{ URL::to('/active_slider/'. $slider->slider_id) }}">
							<i class="halflings-icon white thumbs-up"></i>  
						</a>
						@endif
						
						<a class="btn btn-danger" href="{{ URL::to('/delete-slider/'. $slider->slider_id) }}" id="delete">
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