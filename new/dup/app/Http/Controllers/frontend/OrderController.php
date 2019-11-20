<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\OrderTrackRequest;
use App\Order;

class OrderController extends Controller
{
    /**
     * OrderController storing order related information when user place order 

     * OrderController used to Order track information  display on frontend page 
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('frontend');

    }
    //Customer placing order details display on 
    public function index()
    {
        //
        $orders = Order::GetOrders();

        return view('frontend_theme.shop.order_detail', compact('orders'));
    }

    //display perticular order information using id
    public function show($id)
    {
        $orders = Order::with('users', 'orderPayment', 'order_carts')->find($id);

        return view('frontend_theme.shop.order_detail', compact('orders'));
    }

    //showTrack() track view display

    public function showTrack()
    {
        return view('frontend_theme.shop.order_track');
    }

    //OrderTrack information using email and code 
    public function orderTrack(OrderTrackRequest $request)
    {

        $orders = Order::where('order_code', $request->order_code)->with('users', 'orderPayment', 'order_carts')->get();
        if (isset($orders[0]->users->email)) {
            $email = $orders[0]->users->email;
        } else {
            return back()->with('message', 'Your Order Code Or Email Is invalid');
        }

        if ($email == $request->email && isset($orders)) {
            return view('frontend_theme.shop.order_track', compact('orders'))->with('message', 'Order Code ' . $request->order_code);
        }

        return back()->with('message', 'Found your Order Code');
    }

}
