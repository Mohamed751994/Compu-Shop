<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
session_start();

class SuperAdminController extends Controller
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
    	return view('admin.dashboard');
    }


   
    // public function countCustomer()
    // {
    //     $this->AdminAuthCheck();
    //   $row = DB::table('tbl_customer')->count();
    //   return view('admin.dashboard', [ 'row' => $row ]);
    // }








    public function logout()
    {
    	//Session::put('admin_name', null);
    	//Session::put('admin_id', null);
    	Session::flush(); // instead of above.
    	return Redirect::to('/admin');
    }
}
