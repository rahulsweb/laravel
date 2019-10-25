<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Order;
use App\OrderCartDetail;

class AdminReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function customersIndex(Request $request)
    {

        $keyword = $request->get('search');
        $perPage = 5;

        if (!empty($keyword)) {
             $users = User::whereHas('orders',function($query) use ($keyword){
            
       
                
             })->where('first_name', 'LIKE', "%$keyword%")->orwhere('last_name', 'LIKE', "%$keyword%")->orwhere('email', 'LIKE', "%$keyword%")->paginate($perPage);
        } else {
            $users = User::latest()->paginate($perPage);
        }
       return view('admin.reports.customer',compact('users'));
    }










    public function salesIndex(Request $request)
    {


        $keyword = $request->get('search');
        $perPage = 5;

        if (!empty($keyword)) {
        
             $orders = OrderCartDetail::whereHas('products',function($query) use ($keyword){
            
                $query->where('name', 'LIKE', "%$keyword%");
                
      })->paginate($perPage);
     
        } else {
            $orders = OrderCartDetail::latest()->paginate($perPage);
        }

      
       return view('admin.reports.sales',compact('orders'));
    }
    


    public function couponsIndex(Request $request)
    {

        $keyword = $request->get('search');
        $perPage = 5;

        if (!empty($keyword)) {
            $orders = Order::whereHas('users',function($query) use ($keyword){
            
                $query->where('first_name', 'LIKE', "%$keyword%");
             
                $query->orwhere('email', 'LIKE', "%$keyword%"); 
            
            
            })->orwhereHas('coupons',function($query) use ($keyword){
            
                $query->where('code', 'LIKE', "%$keyword%");
                $query->orwhere('type', 'LIKE', "%$keyword%"); 
                $query->orwhere('title', 'LIKE', "%$keyword%"); 
       
            })->WhereNotNull('coupon_id')->with('coupons','users')->paginate($perPage);

        } else {
            $orders =Order::WhereNotNull('coupon_id')->with('coupons','users')->latest()->paginate($perPage);
        }
       return view('admin.reports.coupon',compact('orders'));
    }








    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
