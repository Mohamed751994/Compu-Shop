@extends('admin_layout')
@section('admin_content')


<ul class="breadcrumb">
	<li>
		<i class="icon-home"></i>
		<a href="index.html">Home</a> 
		<i class="icon-angle-right"></i>
	</li>
	<li><a href="{{ URL::to('/all-category') }}">All Messages</a></li>
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
			<h2><i class="halflings-icon user"></i><span class="break"></span>Messages</h2>
		
		</div>
		<div class="box-content">
			<table class="table table-striped table-bordered bootstrap-datatable datatable">
			  <thead>
				  <tr>
					  <th>Contact Name</th>
					  <th>Contact Email</th>
					  <th>Message</th>
					  <th>Actions</th>
				  </tr>
			  </thead> 
			  @foreach($messages as $message)  
			  <tbody>
				<tr>
					<td>{{ $message->contact_name }}</td>
					<td class="center">{{ $message->contact_email }}</td>
					<td class="center">{{ $message->contact_subject }}</td>
					
					<td class="center">
						
						<a class="btn btn-info" href="">
							<i class="halflings-icon white edit"></i>  
						</a>
						<a class="btn btn-danger" href="" id="delete">
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