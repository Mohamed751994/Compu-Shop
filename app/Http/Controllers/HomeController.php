<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
class HomeController extends Controller
{
    public function index()
    {
    	
    	$all_view_products = DB::table('tbl_products')
    	   ->join('tbl_category', 'tbl_products.category_id', '=', 'tbl_category.category_id')
    	   ->join('tbl_manufacture', 'tbl_products.manufacture_id', '=', 'tbl_manufacture.manufacture_id')
           ->select('tbl_products.*', 'tbl_category.category_name', 'tbl_manufacture.manufacture_name')
    	   ->where('tbl_products.publication_status', 1)
    	   ->limit(6)
    	   ->get();
    	return view('pages.home-content', [ 'all_view_products' => $all_view_products ]);

    	//return view('pages.home-content');
    }

    public function show_product_by_category($category_id)
    {
        $category_products = DB::table('tbl_products')
           ->join('tbl_category', 'tbl_products.category_id', '=', 'tbl_category.category_id')
           ->select('tbl_products.*', 'tbl_category.category_name')
           ->where('tbl_category.category_id', $category_id)
           ->where('tbl_products.publication_status', 1)
           ->limit(18)
           ->get();
        return view('pages.category_by_products', [ 'category_products' => $category_products ]);
    }


    public function show_product_by_manufacture($manufacture_id)
    {
        
        $manufacture_products = DB::table('tbl_products')
           ->join('tbl_category', 'tbl_products.category_id', '=', 'tbl_category.category_id')
           ->join('tbl_manufacture', 'tbl_products.manufacture_id', '=', 'tbl_manufacture.manufacture_id')
           ->select('tbl_products.*', 'tbl_category.category_name', 'tbl_manufacture.manufacture_name')
           ->where('tbl_manufacture.manufacture_id', $manufacture_id)
           ->where('tbl_products.publication_status', 1)
           ->limit(18)
           ->get();
        return view('pages.manufacture_by_products', [ 'manufacture_products' => $manufacture_products ]);

    }


    public function product_details_by_id($product_id)
    {
        $product_details = DB::table('tbl_products')
           ->join('tbl_category', 'tbl_products.category_id', '=', 'tbl_category.category_id')
           ->join('tbl_manufacture', 'tbl_products.manufacture_id', '=', 'tbl_manufacture.manufacture_id')
           ->select('tbl_products.*', 'tbl_category.category_name', 'tbl_manufacture.manufacture_name')
           ->where('tbl_products.product_id', $product_id)
           ->where('tbl_products.publication_status', 1)
           ->limit(6)
           ->first();
        return view('pages.product_details', [ 'product_details' => $product_details ]);
    }

    // public function search(Request $request)
    // {
    //     $search = $request->get('search'); 
    //     $search_product  = DB::table('tbl_products')->where('product_name', 'like', '%'. $search .'%');
    //     return view('layout', ['search_product' => $search_product ]);
    // }


} //end of controller
