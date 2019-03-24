@extends('admin_layout')
@section('admin_content')


<ul class="breadcrumb">
	<li>
		<i class="icon-home"></i>
		<a href="index.html">Home</a>
		<i class="icon-angle-right"></i> 
	</li>
	<li>
		<i class="icon-edit"></i>
		<a href="{{ URL::to('/add-slider') }}">Add slider</a>
	</li>
</ul>
		
<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon edit"></i><span class="break"></span>Add slider</h2>
			
		</div>
		<div class="box-content">
			<form class="form-horizontal" method="post" action="{{ url('/store-slider') }}" enctype="multipart/form-data">
				{{ csrf_field() }}
			  <fieldset>

				

				<div class="control-group">
				  <label class="control-label" for="fileInput">slider Image</label>
				  <div class="controls">
					<input class="input-file uniform_on" name="slider_image"" type="file" required="required">
				  </div>
				</div>


				<div class="control-group">
				  <label class="control-label">Publication Status</label>
				  <div class="controls">
					<input type="checkbox" name="publication_status" value="1" required="">
				  </div>
				</div>
				<div class="form-actions">
				  <button type="submit" class="btn btn-primary">Add slider</button>
				  <button type="reset" class="btn">Cancel</button>
				</div>
			  </fieldset>
			</form>   

		</div>
	</div><!--/span-->

</div><!--/row-->




@endsection