<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\OrderPlace;
use DB;
use Illuminate\Http\Request;
use Validator;

class OrderPlaceController extends Controller
{
    //
    /**
     * @param \App\Http\Controllers\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     *OrderPlaceController add Contact us in database
     * also edit ,delete Contact us in related user Contact us if exist
     */


         
    public function orderPlace(Request $request)
    {
        $validator = Validator::make($request->all(), [

            'amount' => 'required|numeric',
        ]
        );
        if ($validator->fails()) {
            return response()->json([

                'status' => false,
                'error' => $validator->errors(),

            ], 401);
        }

        $data = [
            'amount' => $request->amount,
            'user_id' => auth()->user()->id,
            'order_code' => 'OD_' . now()->timestamp,
        ];
        $order = OrderPlace::create($data);
        if (!$order) {
            return response()->json([

                'status' => false,
                'message' => 'Order Is Not Place',

            ], 401);
        }

        return response()->json([

            'status' => true,
            'message' => 'Order Place Successfully',

        ], 401);
    }

    public function orderStatus(Request $request)
    {
        $validator = Validator::make($request->all(), [

            'order_code' => 'required',
            'payment_status' => 'required',
            'payment_mode' => 'required',
        ]
        );
        if ($validator->fails()) {
            return response()->json([

                'status' => false,
                'error' => $validator->errors(),

            ], 401);
        }
        DB::beginTransaction();
        $order = OrderPlace::where('order_code', '=', $request->order_code)->first();
        if (!$order) {
            return response()->json([
                'status' => false,
                'message' => 'Your Order Code Is Not Exist',

            ], 401);
        }
        $data = [
            'order_code' => $request->order_code,
            'payment_mode' => $request->payment_mode,
            'payment_status' => $request->payment_status,
        ];

        try {
            $orderData = $order->update($data);

            DB::commit();
            // all good
        } catch (\Exception $e) {
            DB::rollback();
            // something went wrong
            return response()->json([
                'status' => false,
                'message' => 'Your Enter Payment Mode Or Payment Status Wrong ',

            ], 401);
        }

        if (!isset($orderData)) {
            DB::rollback();

            return response()->json([
                'status' => false,
                'message' => 'Order Status Not Change',

            ], 401);

        }

        DB::commit();
        return response()->json([

            'status' => true,
            'message' => 'Order Status Successfully Changed',

        ], 401);

    }

}
