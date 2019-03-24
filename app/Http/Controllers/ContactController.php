<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
session_start();


class ContactController extends Controller
{
    public function contact()
    {
    	return view('pages.contact');
    }

    public function store_contact(Request $request)
    {
    	$data = array();
    	$data['contact_name']     = $request->contact_name;
    	$data['contact_email']    = $request->contact_email;
    	$data['contact_subject']  = $request->contact_subject;
    	

    	DB::table('tbl_contact')->insert($data);
    	Session::put('message', 'You Are Contact With Us Successfully And we contact you as soon as... ');
    	return Redirect::to('/contact');
    }

    public function message()
    {
        $messages = DB::table('tbl_contact')->get();
        return view('admin.messages', [ 'messages' => $messages ]);
    }
}
