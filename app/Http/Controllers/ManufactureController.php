<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
session_start();

class ManufactureController extends Controller
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
    	$manufacturies = DB::table('tbl_manufacture')->get();
    	return view('admin.all_manufacture', [ 'manufacturies' => $manufacturies ]);
    }


    public function add()
    {
        $this->AdminAuthCheck();
    	return view('admin.add_manufacture');
    }


      public function store(Request $request)
    {
    	$data = array();
    	$data['manufacture_id'] = $request->manufacture_id;
    	$data['manufacture_name'] = $request->manufacture_name;
    	$data['manufacture_desc'] = $request->manufacture_desc;
    	$data['publication_status'] = $request->publication_status;

    	DB::table('tbl_manufacture')->insert($data);
    	Session::put('message', 'Manufacture Added Successfully !! ');
    	return Redirect::to('/all-manufacture');
    }

    public function edit($manufacture_id)
    {
        $this->AdminAuthCheck();
    	$edit_manufacturies = DB::table('tbl_manufacture')->where('manufacture_id', $manufacture_id)->first();
    	return view('admin.edit_manufacture', [ 'edit_manufacturies' => $edit_manufacturies ]);
    }

     public function update(Request $request, $manufacture_id)
    {
    	$data = array();
    	$data['manufacture_name'] = $request->manufacture_name;
    	$data['manufacture_desc'] = $request->manufacture_desc;
    	DB::table('tbl_manufacture')->where('manufacture_id', $manufacture_id)->update($data);
    	Session::put('message', 'manufacture Updated Successfully !! ');
    	return Redirect::to('/all-manufacture');
    }




    public function delete($manufacture_id)
    {
        $this->AdminAuthCheck();
    	DB::table('tbl_manufacture')->where('manufacture_id', $manufacture_id)->delete();
    	Session::put('message', 'manufacture Deleted Successfully !! ');
    	return Redirect::to('/all-manufacture');
    }




	public function unactive($manufacture_id)
    {
       DB::table('tbl_manufacture')->where('manufacture_id', $manufacture_id)->update(['publication_status' => 0]);
       Session::put('message', 'manufacture Unactive Successfully !! ');
    	return Redirect::to('/all-manufacture');
    }

    public function active($manufacture_id)
    {
       DB::table('tbl_manufacture')->where('manufacture_id', $manufacture_id)->update(['publication_status' => 1]);
       Session::put('message', 'manufacture Active Successfully !! ');
    	return Redirect::to('/all-manufacture');
    }



} //end of controller.
