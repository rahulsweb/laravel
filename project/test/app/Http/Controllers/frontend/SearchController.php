<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


use App\Coupon;
use App\User;
use Response;
class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('search');
    }
  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */








    public function store(Request $request)
    {
       
       $cart=session()->get('cart');   
       $coupon = Coupon::where("code",$request->coupon)->first();
    
           if(!$coupon)
           return back()->with('error',"$request->coupon Is Invalid Coupon");
        
   

        if($coupon)
        {
         
            session()->put('coupon',[
             'name'=>$coupon->code,
             'discount'=>(int)$coupon->discount($cart->totalPrice)   
            ]);
            session()->put('coupon_used',[
                'code'=>$coupon->code,
                'id'=>$coupon->id  
               ]);
                
               session()->put('discount_amount', (int)$coupon->discount($cart->totalPrice) );
           return back()->with('apply',"Coupon Apply $coupon->code Successfully");
        }
      
  
     
    
  
 
     
    }


    public function remove()
       {
           session()->forget('coupon');
           session()->forget('coupon_used');
           return back()->with('error', 'Coupon Remove');
           
       }

















}