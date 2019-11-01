<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\WishList;
use App\Product;
use App\Address;
use Session;
use Auth;
use App\Cart;
use App\ProductImage;
use App\ProductAttribute;
use App\ProductCategory;
use App\Category;
;
class WishListController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('frontend');
     
    }
    public function index()
    {
      
        $products= Product::with('users','product_image','product_attribute','categories')->get();
        $product_image=ProductImage::all();
        if(!Session::has('cart'))
        {
                return view('frontend_theme.shop.wishlist',compact('products','product_image'));
        }
        $oldCart=Session::get('cart');
        $cart=new Cart($oldCart);
       
   
   
    
         
        return view('frontend_theme.shop.wishlist',compact('products','cart','product_image'));
       


      

      
    }
    public function store(Request $request)
    {
    
        $wishlist=new WishList;
        if(auth()->user()->id)
        {
            $wishlist_data=$wishlist->where('product_id','=',$request->wish)->where( 'user_id','=',auth()->user()->id)->pluck('id');
     
            if(!count($wishlist_data)){
              
                $data=[
                  'user_id'=>auth()->user()->id,
                     'product_id'=>$request->wish
        
                ];  
              
                $wishlist->create($data);
              
        }
        
        return back()->with('wishlist_add',"WishList add Successfully");
    }
    return back()->with('wishlist_add',"please Login Your Account");
    }
    





    public function deleteWish($id)
    {

        
       
            $wishlist=WishList::where('product_id',$id)->where('user_id',auth()->user()->id);
            $wishlist->delete();
          
            return back()->with('message',"WishList Remove Successfully"); 
        


    }




}
