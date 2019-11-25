<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Order;
use App\OrderCartDetail;
use App\User;
use Illuminate\Http\Request;

class AdminReportController extends Controller
{
     /**
     *  Admin Report   is reporting related user.
      *    and also manage report of coupons and sales
     *
     * @return \Illuminate\View\View
     */
    

     //searching customer report details
    public function customersIndex(Request $request)
    {

        $keyword = $request->get('search');
        $perPage = 10;
        $users = User::OrderById()->paginate($perPage);
        if (!empty($keyword)) {

            $users = User::SearchName()->paginate($perPage);
        }
        return view('admin.reports.customer', compact('users'));
    }


     //searching sales report details
    public function salesIndex(Request $request)
    {

        $keyword = $request->get('search');
        $perPage = 5;
        $orders = OrderCartDetail::latest()->orderBy('id', 'DESC')->paginate(10);
        if (!empty($keyword)) {

            $orders = OrderCartDetail::SearchByName()->paginate(10);

        }

        return view('admin.reports.sales', compact('orders'));
    }

     //searching coupons report details

    public function couponsIndex(Request $request)
    {

        $keyword = $request->get('search');
        $orders = Order::OrderById()->paginate(10);

        if (!empty($keyword)) {
            $orders = Order::SearchByCoupons()->paginate(10);

        }
        return view('admin.reports.coupon', compact('orders'));
    }

}
