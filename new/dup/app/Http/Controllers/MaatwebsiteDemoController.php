<?php

namespace App\Http\Controllers;

use App\Order;
use App\OrderCartDetail;
use App\User;
use DB;
use Excel;
use Illuminate\Http\Request;
use Input;

class MaatwebsiteDemoController extends Controller
{
 /**
     * Display a listing of the resource.
     *
     *MaatwebsiteDemoController storing data 
     *display product information on index page
     *deleting products manage information about products 
     * import and export information on excel form using this controller 
     * @return \Illuminate\Http\Response
     */
   

    //exel download file 
    public function downloadExcel($type)
    {

        $data = User::get()->toArray();
        return Excel::create('itsolutionstuff_example', function ($excel) use ($data) {
            $excel->sheet('mySheet', function ($sheet) use ($data) {
                $sheet->fromArray($data);
            });
        })->download($type);
    }
  
    //about customer excel file download 
    public function customer(Request $request, $type, $search = null, $page = null)
    {

            $dataList = User::SearchWithoutCustomer();

        $start = 0;

        if ($page > 1) {

            $start = ($page * 5) - 5;
        }

        if ($search) {

            $dataList = User::SearchCustomer($search);
        } 
        return Excel::create('Customer', function ($excel) use ($dataList) {
            $excel->sheet('mySheet', function ($sheet) use ($dataList) {
                $sheet->fromArray($dataList);
            });
        })->download($type);

    }

    
    public function sales(Request $request, $type, $search = null, $page = null)
    {

        $start = 0;

        if ($page > 1) {
            $start = ($page * 5) - 5;
        }

        if ($search || $page) {

            $dataList = OrderCartDetail::SearchBySales($search);

        } else {

            $dataList = OrderCartDetail::WithoutSearchBySales();
        }

        return Excel::create('Customer', function ($excel) use ($dataList) {
            $excel->sheet('mySheet', function ($sheet) use ($dataList) {

                $sheet->fromArray($dataList);
            });
        })->download($type);

    }

    public function sale(Request $request, $type, $page = null)
    {

        $start = 0;

        if ($page > 1) {

            $start = ($page * 5) - 5;

        }

        if ($page) {

            $dataList = OrderCartDetail::WithoutSearchBySales()
                ->take(10)
                ->get();
        }

        return Excel::create('Customer', function ($excel) use ($dataList) {
            $excel->sheet('mySheet', function ($sheet) use ($dataList) {

                $sheet->fromArray($dataList);
            });
        })->download($type);

    }

    public function coupon(Request $request, $type, $page = null)
    {

        $start = 0;

        if ($page > 1) {

            $start = ($page * 5) - 5;

        }

        if ($page || $search) {

            $dataList = Order::OrderSearch($search);
        }

        return Excel::create('Customer', function ($excel) use ($dataList) {
            $excel->sheet('mySheet', function ($sheet) use ($dataList) {

                $sheet->fromArray($dataList);
            });
        })->download($type);

    }

    public function customers(Request $request, $type, $page = null)
    {

        $start = 0;

        if ($page > 1) {

            $start = ($page * 5) - 5;

        }

        if ($page) {

            $dataList = User::whereHas('roles', function ($query) {
                $query->where('name', 'customer');

            })->select('first_name', 'last_name', 'email', 'created_at')->orderBy('id', 'DESC')
                ->get();

        }

        return Excel::create('Customer', function ($excel) use ($dataList) {
            $excel->sheet('mySheet', function ($sheet) use ($dataList) {

                $sheet->fromArray($dataList);
            });
        })->download($type);

    }

    public function coupons($type, $search = null, $page = null)
    {
        $dataList = Order::OrderWithoutSearch();
        $start = 0;

        if ($page > 1) {

            $start = ($page * 5) - 5;
        }

        if ($search) {
            $dataList = Order::OrderSearch($search);
        }

        return Excel::create('Coupons', function ($excel) use ($dataList) {
            $excel->sheet('Coupons', function ($sheet) use ($dataList) {

                $sheet->fromArray($dataList);
            });
        })->download($type);

    }

    public function orders($type, $search = null)
    {

        if ($search) {

            $dataList = Order::SearchOrderCode($search);
        } else {
            $dataList = Order::latest()->get();
        }

        return Excel::create('Coupons', function ($excel) use ($dataList) {
            $excel->sheet('Coupons', function ($sheet) use ($dataList) {

                $sheet->fromArray($dataList);
            });
        })->download($type);

    }

}
