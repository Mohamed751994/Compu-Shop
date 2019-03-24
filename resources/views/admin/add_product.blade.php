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
		<a href="{{ URL::to('/add-product') }}">Add Product</a>
	</li>
</ul>
		
<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon edit"></i><span class="break"></span>Add Product</h2>
			
		</div>
		<div class="box-content">
			<form class="form-horizontal" method="post" action="{{ url('/store-product') }}" enctype="multipart/form-data">
				{{ csrf_field() }}
			  <fieldset>

				<div class="control-group">
				  <label class="control-label" for="">Product Name</label>
				  <div class="controls">
					<input type="text" class="input-xlarge" name="product_name" required="required">
				  </div>
				</div>

          		<div class="control-group">
				  <label class="control-label" for="selectError3">Product Category</label>
				  <div class="controls">
				    <select id="selectError3" name="category_id">
				    <option>Select Category</option>
					<?php 
                     $all_categories = DB::table('tbl_category')->where('publication_status', 1)->get();
                     foreach($all_categories as $all_category){?>  
					<option value="{{ $all_category->category_id }}">{{ $all_category->category_name }}</option>
					<?php } ?>
				    </select>
				  </div>
			    </div>

			    <div class="control-group">
				  <label class="control-label" for="selectError3">Manufacture Name</label>
				  <div class="controls">
				    <select id="selectError3" name="manufacture_id">
				    <option>Select Manufacture</option>
					<?php 
                    $all_manufacturies = DB::table('tbl_manufacture')->where('publication_status', 1)->get();
                     foreach($all_manufacturies as $all_manufacture){?>    
					<option value="{{ $all_manufacture->manufacture_id }}">{{ $all_manufacture->manufacture_name }}</option>
					<?php } ?>
				    </select>
				  </div>
			    </div>

				<div class="control-group hidden-phone">
				  <label class="control-label" for="textarea2">Short Description</label>
				  <div class="controls">
					<textarea class="cleditor" name="short_desc" rows="3" required="required"></textarea>
				  </div>
				</div>

				<div class="control-group hidden-phone">
				  <label class="control-label" for="textarea2">Long Description</label>
				  <div class="controls">
					<textarea class="cleditor" name="long_desc" rows="3" required="required"></textarea>
				  </div>
				</div>

				<div class="control-group">
				  <label class="control-label" for="">Product Price</label>
				  <div class="controls">
					<input type="text" class="input-xlarge" name="product_price" required="required">
				  </div>
				</div>

				<div class="control-group">
				  <label class="control-label" for="fileInput">Product Image</label>
				  <div class="controls">
					<input class="input-file uniform_on" name="product_image"" type="file">
				  </div>
				</div>





				<div class="control-group">
				  <label class="control-label" for="">Product Size</label>
				  <div class="controls">
					<input type="text" class="input-xlarge" name="product_size" required="required">
				  </div>
				</div>


				<div class="control-group">
				  <label class="control-label" for="">Product Color</label>
				  <div class="controls">
					<input type="text" class="input-xlarge" name="product_color" required="required">
				  </div>
				</div>


				<div class="control-group">
				  <label class="control-label">Publication Status</label>
				  <div class="controls">
					<input type="checkbox" name="publication_status" value="1">
				  </div>
				</div>
				<div class="form-actions">
				  <button type="submit" class="btn btn-primary">Add Product</button>
				  <button type="reset" class="btn">Cancel</button>
				</div>
			  </fieldset>
			</form>   

		</div>
	</div><!--/span-->

</div><!--/row-->




@endsection