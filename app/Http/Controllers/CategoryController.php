<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
session_start();

class CategoryController extends Controller
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
    	$categories = DB::table('tbl_category')->get();
    	return view('admin.all_category', [ 'categories' => $categories ]);
    }

    public function add()
    {
        $this->AdminAuthCheck();
    	return view('admin.add_category');
    }

    public function store(Request $request)
    {
    	$data = array();
    	$data['category_id'] = $request->category_id;
    	$data['category_name'] = $request->category_name;
    	$data['category_desc'] = $request->category_desc;
    	$data['publication_status'] = $request->publication_status;

    	DB::table('tbl_category')->insert($data);
    	Session::put('message', 'Category Added Successfully !! ');
    	return Redirect::to('/all-category');
    }

    public function edit($category_id)
    {
        $this->AdminAuthCheck();
    	$edit_categories = DB::table('tbl_category')->where('category_id', $category_id)->first();
    	return view('admin.edit_category', [ 'edit_categories' => $edit_categories ]);
    }

     public function update(Request $request, $category_id)
    {
    	$data = array();
    	$data['category_name'] = $request->category_name;
    	$data['category_desc'] = $request->category_desc;
    	DB::table('tbl_category')->where('category_id', $category_id)->update($data);
    	Session::put('message', 'Category Updated Successfully !! ');
    	return Redirect::to('/all-category');
    }

    public function delete($category_id)
    {
        $this->AdminAuthCheck();
    	DB::table('tbl_category')->where('category_id', $category_id)->delete();
    	Session::put('message', 'Category Deleted Successfully !! ');
    	return Redirect::to('/all-category');
    }




    public function unactive($category_id)
    {
       DB::table('tbl_category')->where('category_id', $category_id)->update(['publication_status' => 0]);
       Session::put('message', 'Category Unactive Successfully !! ');
    	return Redirect::to('/all-category');
    }

    public function active($category_id)
    {
       DB::table('tbl_category')->where('category_id', $category_id)->update(['publication_status' => 1]);
       Session::put('message', 'Category Active Successfully !! ');
    	return Redirect::to('/all-category');
    }




} /// end of CategoryController
