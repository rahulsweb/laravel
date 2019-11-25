<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;
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
    public function __construct()
    {
        $this->middleware('frontend');
     
    }
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
        
   
            $user_coupon_count= DB::table('orders')->where('coupon_id','=',$coupon->id)->where('user_id','=',auth()->user()->id)->count();
  
           
            if($user_coupon_count)
                  return back()->with('error'," $request->coupon  this Coupon already used");
           

           if($coupon->qty_left < 1  )
           {
            
                  if($coupon->status=="Active")  
                    {
                        $coupon->status="InActive";
                        $coupon->update(['status'=>$coupon->status]);
           
                    }
                    return back()->with('error',"your Enter $request->coupon is Expired ");
           }
       
           


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