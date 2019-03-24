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
		<a href="{{ URL::to('/edit-category') }}">Edit Category</a>
	</li>
</ul>
		
<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon edit"></i><span class="break"></span>Edit Category</h2>
			
		</div>
		<div class="box-content">
			<form class="form-horizontal" method="post" 
			action="{{ url('/update-category' , $edit_categories->category_id) }}">
			
				{{ csrf_field() }}
			  <fieldset>
				<div class="control-group">
				  <label class="control-label" for="">Category Name</label>
				  <div class="controls">
					<input type="text" class="input-xlarge" name="category_name" value="{{ $edit_categories->category_name }}">
				  </div>
				</div>
          
				<div class="control-group hidden-phone">
				  <label class="control-label" for="textarea2">Category Description</label>
				  <div class="controls">
					<textarea class="cleditor" name="category_desc" rows="3">
						{{ $edit_categories->category_desc }}
					</textarea>
				  </div>
				</div>
				
				<div class="form-actions">
				  <button type="submit" class="btn btn-primary">Save Changes</button>
				  
				</div>
			  </fieldset>
			</form>   

		</div>
	</div><!--/span-->

</div><!--/row-->




@endsection