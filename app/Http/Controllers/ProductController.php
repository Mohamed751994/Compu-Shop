<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
session_start();

class ProductController extends Controller
{
	public function AdminAuthCheck()
    {
    	$admin_id = Session::get('admin_id');
    	if ($admin_id) {
    		return;
    	}else
    	{
    		return Redirect::to('/admin')->send();
    	}
    }

    public function index()
    {
    	$this->AdminAuthCheck();
    	$products = DB::table('tbl_products')
    	   ->join('tbl_category', 'tbl_products.category_id', '=', 'tbl_category.category_id')
    	   ->join('tbl_manufacture', 'tbl_products.manufacture_id', '=', 'tbl_manufacture.manufacture_id')
           ->select('tbl_products.*', 'tbl_category.category_name', 'tbl_manufacture.manufacture_name')
    	   ->get();
    	return view('admin.all_product', [ 'products' => $products ]);
    }

    public function add()
    {
    	$this->AdminAuthCheck();
    	return view('admin.add_product');
    }

    public function store(Request $request)
    {
    	$data = array();
    	
    	$data['category_id'] 		= $request->category_id;
    	$data['manufacture_id']     = $request->manufacture_id;
    	$data['product_name'] 		= $request->product_name;
    	$data['product_short_desc'] = $request->short_desc;
    	$data['product_long_desc']  = $request->long_desc;
    	$data['product_price'] 		= $request->product_price;
    	$data['product_size'] 		= $request->product_size;
    	$data['product_color']	    = $request->product_color;
    	$data['publication_status'] = $request->publication_status;

    	$image = $request->file('product_image');
    	if ($image) {
    		$image_name = str_random(20);
    		$ext = strtolower($image->getClientOriginalExtension());
    		$image_full_name = $image_name. '.' .$ext;
    		$upload_path = 'images/';
    		$image_url = $upload_path.$image_full_name;
    		$success = $image->move($upload_path, $image_full_name);
    		if ($success) {
    			$data['product_image'] = $image_url;



    			DB::table('tbl_products')->insert($data);
    			Session::put('message', 'Product Added Successfully !! ');
    			return Redirect::to('/all-product');
    		}
    	}
    	$data['product_image'] = '';

    	DB::table('tbl_products')->insert($data);
    	Session::put('message', 'Product Added Successfully without Image !! ');
    	return Redirect::to('/all-product');
    }

    public function edit($product_id)
    {
        $this->AdminAuthCheck();
        $edit_products = DB::table('tbl_products')->where('product_id', $product_id)->first();
        return view('admin.edit_product', [ 'edit_products' => $edit_products ]);
    }

    public function update(Request $request, $product_id)
    {
        $data = array();
        $data['product_name']       = $request->product_name;
        $data['category_id']        = $request->category_id;
        $data['manufacture_id']     = $request->manufacture_id;
        $data['product_short_desc'] = $request->short_desc;
        $data['product_long_desc']  = $request->long_desc;
        $data['product_price']      = $request->product_price;
        $data['product_size']       = $request->product_size;
        $data['product_color']      = $request->product_color;
       
        $image = $request->file('product_image');
        if ($image) {
            $image_name = str_random(20);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name. '.' .$ext;
            $upload_path = 'images/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            if ($success) {
                $data['product_image'] = $image_url;



                DB::table('tbl_products')->where('product_id', $product_id)->update($data);
                Session::put('message', 'Product Updated Successfully !! ');
                return Redirect::to('/all-product');
            }
        }
        $data['product_image'] = '';

        DB::table('tbl_products')->where('product_id', $product_id)->update($data);
        Session::put('message', 'Product Updated Successfully without Image !! ');
        return Redirect::to('/all-product');
    }



	public function delete($product_id)
	{
        $this->AdminAuthCheck();
		DB::table('tbl_products')->where('product_id', $product_id)->delete();
		Session::put('message', 'product Deleted Successfully !! ');
		return Redirect::to('/all-product');
	}


    public function unactive($product_id)
    {
       DB::table('tbl_products')->where('product_id', $product_id)->update(['publication_status' => 0]);
       Session::put('message', 'product Unactive Successfully !! ');
    	return Redirect::to('/all-product');
    }

    public function active($product_id)
    {
       DB::table('tbl_products')->where('product_id', $product_id)->update(['publication_status' => 1]);
       Session::put('message', 'product Active Successfully !! ');
    	return Redirect::to('/all-product');
    }



}  //end of controller
