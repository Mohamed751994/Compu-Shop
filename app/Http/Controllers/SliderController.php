<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
session_start();

class SliderController extends Controller
{
    public function index()
    {
    	$sliders = DB::table('tbl_slider')->get();
    	return view('admin.all_slider', [ 'sliders' => $sliders ]);
    }

    public function add()
    {
    	return view('admin.add_slider');
    }

    public function store(Request $request)
    {
    	$data = array();
		$data['publication_status'] = $request->publication_status;
        $image = $request->file('slider_image');
    	if ($image) {
    		$image_name = str_random(20);
    		$ext = strtolower($image->getClientOriginalExtension());
    		$image_full_name = $image_name. '.' .$ext;
    		$upload_path = 'slider/';
    		$image_url = $upload_path.$image_full_name;
    		$success = $image->move($upload_path, $image_full_name);
    		if ($success) {
    			$data['slider_image'] = $image_url;



    			DB::table('tbl_slider')->insert($data);
    			Session::put('message', 'slider Added Successfully !! ');
    			return Redirect::to('/all-slider');
    		}
    	}
    	$data['slider_image'] = '';

    	DB::table('tbl_slider')->insert($data);
    	Session::put('message', 'slider Added Successfully without Image !! ');
    	return Redirect::to('/all-slider');
    }



    public function delete($slider_id)
    {
        
    	DB::table('tbl_slider')->where('slider_id', $slider_id)->delete();
    	Session::put('message', 'slider Deleted Successfully !! ');
    	return Redirect::to('/all-slider');
    }




    public function unactive($slider_id)
    {
       DB::table('tbl_slider')->where('slider_id', $slider_id)->update(['publication_status' => 0]);
       Session::put('message', 'slider Unactive Successfully !! ');
    	return Redirect::to('/all-slider');
    }

    public function active($slider_id)
    {
       DB::table('tbl_slider')->where('slider_id', $slider_id)->update(['publication_status' => 1]);
       Session::put('message', 'slider Active Successfully !! ');
    	return Redirect::to('/all-slider');
    }

}
