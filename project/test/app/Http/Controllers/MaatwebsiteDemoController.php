<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use App\User;
use DB;
use Excel;
use App\Order;
use App\OrderCartDetail;
class MaatwebsiteDemoController extends Controller
{
	public function importExport()
	{
		return view('importExport');
	}
	public function downloadExcel($type)
	{
      
		$data = User::get()->toArray();
		return Excel::create('itsolutionstuff_example', function($excel) use ($data) {
			$excel->sheet('mySheet', function($sheet) use ($data)
	        {
				$sheet->fromArray($data);
	        });
		})->download($type);
	}
	public function importExcel()
	{
		if(Input::hasFile('import_file')){
			$path = Input::file('import_file')->getRealPath();
			$data = Excel::load($path, function($reader) {
			})->get();
			if(!empty($data) && $data->count()){
				foreach ($data as $key => $value) {
					$insert[] = ['title' => $value->title, 'description' => $value->description];
				}
				if(!empty($insert)){
					DB::table('users')->insert($insert);
					dd('Insert Record successfully.');
				}
			}
		}
		return back();
    }
    
    public function customer(Request $request,$type,$search=NULL,$page=NULL)
	{
	

		$start=0;
	
		
		

		if($page > 1)
		{

			$start=($page*5)-5;
		}

		if($search)
		{
			$dataList = User::select('first_name','last_name','email','created_at')->where('first_name', 'LIKE', "$search%")
			->orwhere('email', 'LIKE', "%$search%")
			->skip($start)->take(5)->get();
		}
		else
		{
			$dataList = User::select('first_name','last_name','email','created_at')->latest()->get();
			
		}
		
		return Excel::create('Customer', function($excel) use ($dataList) {
			$excel->sheet('mySheet', function($sheet) use ($dataList)
			{
				$sheet->fromArray($dataList);
			});
		})->download($type);
	
	}
	    
    public function sales(Request $request,$type,$search=NULL,$page=NULL)
	{
		$start=0;
	

		
		if($page > 1)
		{
			$start=($page*5)-5;
		}
		
			if($search)
			{
		
				$dataList = OrderCartDetail::join('products', 'order_cart_details.product_id', '=', 'products.id')
				->join('orders', 'order_cart_details.order_id', '=', 'orders.id')
				
				->select('products.name as Product Name','order_cart_details.total_qty as Product Qty','products.rate as Product Price','order_cart_details.category_name as Category Name')
				->where('products.name', 'LIKE', "%$search%")
				
				->orwhere('order_cart_details.category_name', 'LIKE', "%$search%")
				->skip($start)->take(5)->get();
			
			}
			else {
			
				$dataList = OrderCartDetail::join('products', 'order_cart_details.product_id', '=', 'products.id')
				->join('orders', 'order_cart_details.order_id', '=', 'orders.id')
				
				->select('products.name as Product Name','order_cart_details.total_qty as Product Qty','products.rate as Product Price','order_cart_details.category_name as Category Name')
				
				->latest('products.created_at')->get();
			}
		
		
		return Excel::create('Customer', function($excel) use ($dataList) {
			$excel->sheet('mySheet', function($sheet) use ($dataList)
			{
		
				$sheet->fromArray($dataList);
			});
		})->download($type);
		
	
	}



	





	public function sale(Request $request,$type,$page=NULL)
	{


		$start=0;
	

	
		if($page > 1)
		{
			
			$start=($page*5)-5;
		
		}
	
		
			if($page)
			{
		
			
		
				$dataList = OrderCartDetail::join('products', 'order_cart_details.product_id', '=', 'products.id')
				->join('orders', 'order_cart_details.order_id', '=', 'orders.id')
				
				->select('products.name as Product Name','order_cart_details.total_qty as Product Qty','order_cart_details.total_cart as Product Price','order_cart_details.category_name as Category Name')
				
				->skip($start)
				->take(5)
				->latest('order_cart_details.created_at')->get();
			}
		
		
		return Excel::create('Customer', function($excel) use ($dataList) {
			$excel->sheet('mySheet', function($sheet) use ($dataList)
			{
		
				$sheet->fromArray($dataList);
			});
		})->download($type);
		
	
	}





	public function coupon(Request $request,$type,$page=NULL)
	{


		$start=0;
	

	
		if($page > 1)
		{
			
			$start=($page*5)-5;
		
		}
	
		
			if($page)
			{
		
			
		
				$dataList = Order::join('coupons', 'orders.coupon_id', '=', 'coupons.id')
				->join('users', 'orders.user_id', '=', 'users.id')
				
				->select('coupons.code as Code','coupons.discount as Discount','coupons.type as Type','users.first_name AS First Name','users.last_name as Last_name' )
				->where('coupons.code', 'LIKE', "$search%")
				->orwhere('users.first_name', 'LIKE', "$search%")
			
				->orwhere('users.email', 'LIKE', "$search%")
		
				->whereNotNull('orders.coupon_id')
				->skip($start)->take(5)->get();
			}
		
		
		return Excel::create('Customer', function($excel) use ($dataList) {
			$excel->sheet('mySheet', function($sheet) use ($dataList)
			{
		
				$sheet->fromArray($dataList);
			});
		})->download($type);
		
	
	}





	public function customers(Request $request,$type,$page=NULL)
	{


		$start=0;
	

	
		if($page > 1)
		{
			
			$start=($page*5)-5;
		
		}
	
		
			if($page)
			{
		
			
		
				$dataList = User::select('first_name','last_name','email','created_at')->where('first_name', 'LIKE', "%$search%")
				->orwhere('email', 'LIKE', "%$search%")
				->skip($start)->take(5)->get();
			}
		
		
		return Excel::create('Customer', function($excel) use ($dataList) {
			$excel->sheet('mySheet', function($sheet) use ($dataList)
			{
		
				$sheet->fromArray($dataList);
			});
		})->download($type);
		
	
	}




















	public function coupons($type,$search=NULL,$page=NULL)
	{
		$start=0;
	

		if($page > 1)
		{
			
			$start=($page*5)-5;
		}

if($search)
{
	$dataList = Order::join('coupons', 'orders.coupon_id', '=', 'coupons.id')
		->join('users', 'orders.user_id', '=', 'users.id')
		
		->select('coupons.code as Code','coupons.discount as Discount','coupons.type as Type','users.first_name AS First Name','users.last_name as Last_name' )
		->where('coupons.code', 'LIKE', "$search%")
		->orwhere('users.first_name', 'LIKE', "$search%")
	
		->orwhere('users.email', 'LIKE', "$search%")

		->whereNotNull('orders.coupon_id')
		->skip($start)->take(5)->get();
}
else
{
	$dataList = Order::join('coupons', 'orders.coupon_id', '=', 'coupons.id')
	->join('users', 'orders.user_id', '=', 'users.id')
	
	->select('coupons.code as Code','coupons.discount as Discount','coupons.type as Type','users.first_name AS First Name','users.last_name as Last_name' )
	->whereNotNull('orders.coupon_id')
	->latest('orders.created_at')->get();	
}

		
		return Excel::create('Coupons', function($excel) use ($dataList) {
			$excel->sheet('Coupons', function($sheet) use ($dataList)
			{
		
				$sheet->fromArray($dataList);
			});
		})->download($type);
		
	
	}


	public function orders($type,$search=NULL)
	{

if($search)
{

	$dataList = Order::join('users', 'orders.user_id', '=', 'users.id')
	->join('log_order', 'log_order.order_id', '=', 'orders.id')
	->join('order_cart_details', 'order_cart_details.order_id', '=', 'orders.id')
	->select('orders.order_code as Order Code','users.first_name','users.last_name','log_order.status','order_cart_details.total_qty','order_cart_details.total_cart','log_order.created_at')
	->where('orders.order_code', 'LIKE', "%$search%")
	->orwhere('users.first_name', 'LIKE', "%$search%")
	->orwhere('log_order.status', 'LIKE', "%$search%")
	->orwhere('users.email', 'LIKE', "%$search%")
	->latest('orders.created_at')->get();
}
else {
	$dataList = Order::latest()->get();
}







		
		return Excel::create('Coupons', function($excel) use ($dataList) {
			$excel->sheet('Coupons', function($sheet) use ($dataList)
			{
		
				$sheet->fromArray($dataList);
			});
		})->download($type);
		
	
	}

}