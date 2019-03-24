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
		<a href="{{ URL::to('/add-category') }}">Add Category</a>
	</li>
</ul>
		
<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon edit"></i><span class="break"></span>Add Category</h2>
			
		</div>
		<div class="box-content">
			<form class="form-horizontal" method="post" action="{{ url('/store-category') }}">
				{{ csrf_field() }}
			  <fieldset>
				<div class="control-group">
				  <label class="control-label" for="">Category Name</label>
				  <div class="controls">
					<input type="text" class="input-xlarge" name="category_name" required="required">
				  </div>
				</div>
          
				<div class="control-group hidden-phone">
				  <label class="control-label" for="textarea2">Category Description</label>
				  <div class="controls">
					<textarea class="cleditor" name="category_desc" rows="3" required="required"></textarea>
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label">Publication Status</label>
				  <div class="controls">
					<input type="checkbox" name="publication_status" value="1">
				  </div>
				</div>
				<div class="form-actions">
				  <button type="submit" class="btn btn-primary">Add Category</button>
				  <button type="reset" class="btn">Cancel</button>
				</div>
			  </fieldset>
			</form>   

		</div>
	</div><!--/span-->

</div><!--/row-->




@endsection