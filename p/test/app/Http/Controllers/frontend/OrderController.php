<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;


use App\Http\Controllers\Controller;
use App\Order;
use App\Http\Requests\Frontend\OrderTrackRequest;
class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $orders=Order::where('user_id',auth()->user()->id)->with('users','orderPayment','order_carts','log_order')->get();

        return view('frontend_theme.shop.order_detail',compact('orders'));
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
        $orders=Order::with('users','orderPayment','order_carts')->find($id);
      
        return view('frontend_theme.shop.order_detail',compact('orders'));
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

    public function showTrack()
    {
     return view('frontend_theme.shop.order_track');
    } 
    public function orderTrack(OrderTrackRequest $request)
    {


        $orders=Order::where('order_code',$request->order_code)->with('users','orderPayment','order_carts')->get();

    $email=$orders[0]->users->email;
      
        if($email==$request->email && isset($orders))     
        return view('frontend_theme.shop.order_track',compact('orders'));
        return back();
    } 
   
}
