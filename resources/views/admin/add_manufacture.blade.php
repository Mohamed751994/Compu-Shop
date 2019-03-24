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
		<a href="{{ URL::to('/add-manufacture') }}">Add Manufacture</a>
	</li>
</ul>
		
<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon edit"></i><span class="break"></span>Add Manufacture</h2>
			
		</div>
		<div class="box-content">
			<form class="form-horizontal" method="post" action="{{ url('/store-manufacture') }}">
				{{ csrf_field() }}
			  <fieldset>
				<div class="control-group">
				  <label class="control-label" for="">Manufacture Name</label>
				  <div class="controls">
					<input type="text" class="input-xlarge" name="manufacture_name" required="required">
				  </div>
				</div>
          
				<div class="control-group hidden-phone">
				  <label class="control-label" for="textarea2">Manufacture Description</label>
				  <div class="controls">
					<textarea class="cleditor" name="manufacture_desc" rows="3" required="required"></textarea>
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label">Publication Status</label>
				  <div class="controls">
					<input type="checkbox" name="publication_status" value="1">
				  </div>
				</div>
				<div class="form-actions">
				  <button type="submit" class="btn btn-primary">Add Manufacture</button>
				  <button type="reset" class="btn">Cancel</button>
				</div>
			  </fieldset>
			</form>   

		</div>
	</div><!--/span-->

</div><!--/row-->




@endsection