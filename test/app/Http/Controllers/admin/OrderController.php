<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Order;
use App\OrderPaymentDetail;
use App\LogOrder;
use App\Mail\StatusUser;
use Mail;
class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //



        $keyword = $request->get('search');
        $perPage = 5;

        if (!empty($keyword)) {

            // $categories = Categories::with('product')->orderBy('name', 'asc')
            // ->whereHas('product', function($query) use ($search){
            //        $query->where('name', 'LIKE', '%'.$search.'%');
            //  })->get();

             $orders = Order::whereHas('users',function($query) use ($keyword){
                $query->where('first_name', 'LIKE', "%$keyword%");
        
                $query->orwhere('last_name', 'LIKE', "%$keyword%");

                $query->orwhere('email', 'LIKE', "%$keyword%");
      })->orwhereHas('log_order',function($query) use ($keyword){
        $query->where('status', 'LIKE', "%$keyword%");
       
})->orwhere('order_code', 'LIKE', "%$keyword%")->with('users','orderPayment','order_carts','log_order')->paginate($perPage);



        } else {
            $orders = Order::latest()->paginate($perPage);
        }

        






       return view('admin.order.index',compact('orders'));
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
      
        return view('admin.order.show',compact('orders'));
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

        $orders=Order::with('users','orderPayment','order_carts')->find($id);
      
        return view('admin.order.edit',compact('orders'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        $logs=new LogOrder;
        $order_payment=OrderPaymentDetail::findorfail($order->orderPayment[0]->id);
        $data=[
            'status'=>$request->status

        ];
        $order_payment->update($data);
            
    
        
        $logdata=[
            'order_id'=>$order->id,    
           'status'=>$request->status
        ];

        $logs->create($logdata);

Mail::to($order->users->email)->send(new StatusUser($order,$request->status));
        return redirect('admin/order')->with('flash_message', 'Status updated!');
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







    public function search($keyword)
    {
        //
       
        $perPage = 5;
    $orders = Order::whereHas('users',function($query) use ($keyword){
        $query->where('email', 'LIKE', "%$keyword%");
})->orwhere('order_code', 'LIKE', "%$keyword%")->with('users')->paginate($perPage);
        return view('admin.order.index',compact('orders'))->with('keyword',$keyword);
    }



}
