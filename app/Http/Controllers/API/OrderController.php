<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Order;
use Auth;
use Illuminate\Http\Request;
use Validator;

class OrderController extends Controller
{
    //

    /**
     * @param \App\Http\Controllers\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     *OrderController add Contact us in database
     * also edit ,delete Contact us in related user Contact us if exist
     */


   
    public function orderTrack(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'order_code' => 'required',
        ],
            [
                'email.required' => 'Email Required',
                'order_code.required' => 'Order Code Required',

            ]

        );

        if ($validator->fails()) {
            return response()->json([

                'status' => false,
                'message' => $validator->errors(),

                'data' => [],
            ], 401);
        }
        $orders = Order::where('order_code', $request->order_code)->with('users', 'orderPayment', 'order_carts')->get();

        if (isset($orders->first()->users->email)) {
            $email = $orders->first()->users->email;

        } else {

            return response()->json([

                'status' => false,
                'message' => 'Your Order Code Or Email Is invalid',

                'data' => [],
            ], 401);

        }

        if ($email == $request->email && isset($orders)) {

            return response()->json([

                'status' => true,
                'message' => 'Success',

                'data' => $orders,
            ], 401);
        }

    }



 /**
     * @param \App\Http\Controllers\Request $request
     * OrderController store method pass one parameter OrderRequest $request for storing a Order user related

     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     *OrderController add Contact us in database
     * also edit ,delete Contact us in related user Contact us if exist
     */

          

    public function getOrderDetails(Request $request)
    {

        $orders = Order::with('users', 'orderPayment', 'order_carts')->where('user_id', Auth::user()->id)->get();

        if (!$orders->first()) {
            return response()->json([

                'status' => false,
                'message' => 'Order Not Found',

                'data' => [],
            ], 401);
        }

        return response()->json([

            'status' => true,
            'message' => 'Success',

            'data' => $orders,
        ], 401);
    }

}
