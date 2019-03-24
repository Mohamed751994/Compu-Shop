<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Cart;
use Session;
session_start();
class CheckoutController extends Controller
{
    public function loginCheck()
    {
    	return view('pages.login');
    }

    public function customer_register(Request $request)
    {
    	$data = array();
    	$data['customer_name']     = $request->customer_name;
    	$data['customer_email']    = $request->customer_email;
    	$data['customer_password'] = md5($request->password);
    	$data['customer_mobile']   = $request->customer_mobile;

    	$customer_id = DB::table('tbl_customer')->insertGetId($data);
    	Session::put('customer_id', $customer_id);
    	Session::put('customer_name', $request->customer_name);
    	return Redirect('/checkout');
    }


    public function checkout()
    {
    	return view('pages.checkout');
    }

    public function store_shipping_details(Request $request)
    {
    	$data = array();
    	$data['shipping_email']         = $request->shipping_email;
    	$data['shipping_first_name']    = $request->shipping_first_name;
    	$data['shipping_last_name']     = $request->shipping_last_name;
    	$data['shipping_address']       = $request->shipping_address;
    	$data['shipping_mobile_number'] = $request->shipping_mobile_number;
    	$data['shipping_city']          = $request->shipping_city;

    	$shipping_id = DB::table('tbl_shipping')->insertGetId($data);
    	Session::put('shipping_id', $shipping_id);
    	return Redirect::to('/payment');
    }

    public function payment()
    {

    	return view('pages.payment');
    }

    public function customer_login(Request $request)
    {
    	$customer_email    = $request->customer_email;
    	$customer_password = md5($request->password);
    	$result = DB::table('tbl_customer')->where('customer_email', $customer_email)
    									   ->where('customer_password', $customer_password)
    									   ->first();
    	if ($result) {
    		Session::put('customer_id', $result->customer_id);
    		return Redirect::to('/show-cart');
    	}else{

    		return Redirect::to('/login-check');
    	}
    }


    public function order(Request $request)
    {
    	$payment_gateway = $request->payment_method;
    	$pdata = array();
    	$pdata['payment_method'] = $payment_gateway;
    	$pdata['payment_status']  = 'pending';
    	$payment_id = DB::table('tbl_payment')->insertGetId($pdata);

    	$odata = array();
    	$odata['customer_id']  = Session::get('customer_id');
    	$odata['shipping_id']  = Session::get('shipping_id');
    	$odata['payment_id']   = $payment_id;
    	$odata['order_total']  = Cart::total();
    	$odata['order_status'] = 'pending';
    	$order_id = DB::table('tbl_order')->insertGetId($odata);

    	$contents = Cart::content();

    	$oddata = array();
    	foreach ($contents as $content) {
    		
    		$oddata['order_id'] = $order_id;
    		$oddata['product_id'] = $content->id;
    		$oddata['product_name'] = $content->name;
    		$oddata['product_price'] = $content->price;
    		$oddata['product_sales_quantity'] = $content->qty;

    		DB::table('tbl_order_details')->insert($oddata);
    	}

    	if ($payment_gateway == 'handcash') {

    		Cart::destroy();
    		return view('pages.handcash');

    	}elseif ($payment_gateway == 'paypal') {
    		echo 'done by paypal';
    	}elseif ($payment_gateway == 'visa') {
    		echo 'done by visa';
    	}else{
    		echo "not selected";
    	}
	}


	public function manage_order()
	{
		$orders = DB::table('tbl_order')
    	   ->join('tbl_customer', 'tbl_order.customer_id', '=', 'tbl_customer.customer_id')
           ->select('tbl_order.*', 'tbl_customer.customer_name')
    	   ->get();
    	return view('admin.manage_order', [ 'orders' => $orders ]);
	}


    public function view_order($order_id)
	{
		$view_order = DB::table('tbl_order')
    	  ->join('tbl_customer', 'tbl_order.customer_id', '=', 'tbl_customer.customer_id')
    	  ->join('tbl_order_details', 'tbl_order.order_id', '=', 'tbl_order_details.order_id')
    	  ->join('tbl_shipping', 'tbl_order.shipping_id', '=', 'tbl_shipping.shipping_id')
          ->select('tbl_order.*', 'tbl_order_details.*', 'tbl_shipping.*', 'tbl_customer.*')
    	  ->get();
    	return view('admin.view_order', [ 'view_order' => $view_order ]);
	}

	public function delete_order($order_id)
    {
    	DB::table('tbl_order')->where('order_id', $order_id)->delete();
    	Session::put('message', 'Order Deleted Successfully !! ');
    	return Redirect::to('/manage-order');
    }


    public function customer_logout()
    {
    	Session::flush();
    	return Redirect::to('/');
    }




} // end of class
