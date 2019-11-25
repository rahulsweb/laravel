<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Product;

use Session;
use App\Cart;

class CartController extends Controller
{
    
    /**
     * Cart Controller  is storing Cart details related user.
          and also store order place cart detail.
     *
     * @return \Illuminate\View\View
     */
    
    public function index()
    {
        //
        
    
        return view('frontend_theme.shop.shopping_cart');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //
        $products=Product::find($id);

        $cart=Cart::add($id,$products->name,1,$products->rate,['size' => 'large']);
        return view('frontend_theme.shop.shopping_cart',compact('cart'));
    }



    public function destroy(Request $request,$id)
    {  
        //
        $products = session('cart');
        foreach ($products as $key => $product)
        {

      
            if ($product[$id] == $id)  
            {  
                    
                unset($product[$key]);            
            }
            $request->session()->push('cart',$product);
        }

        return redirect()->back();
    }




          
       



    public function cart(Request $request,$id )
    {
       
        $product=Product::find($id);
  
        $oldCart=Session::has('cart')? Session::get('cart'):null;
       
        $cart=new Cart($oldCart);
        $cart->addProduct($product,$id);
        Session::put('cart',$cart);
        return back()->with('massage',"product successfully addd");
    }
    public function shoppingCart()
    {
        if(!Session::has('cart'))
        {
                return view('frontend_theme.shop.shopping_cart',['product'=>null]);
        }
        $oldCart=Session::get('cart');
        $cart=new Cart($oldCart);
        return view('frontend_theme.shop.shopping_cart',['products'=>$cart->items,'totalPrice'=>$cart->totalPrice]);
    }
    public function removeProduct($id)
    {

    
        $product=Product::find($id);
        $oldCart=Session::has('cart')? Session::get('cart'):null;
        $cart=new Cart($oldCart);
        $cart->removeProduct($product,$id);
        Session::put('cart',$cart);
        return back()->with('message',"Product $product->name Remove Successfully"); 
    }

    public function addCart($id)
    {

        $product=Product::find($id);
        $oldCart=Session::has('cart')? Session::get('cart'):null;
        $cart=new Cart($oldCart);
        $cart->addCart($product,$id);
        Session::put('cart',$cart);
        return back()->with('massage',"product successfully addd");
       
    }
    public function minusCart($id)
    {
        $product=Product::find($id);
        $oldCart=Session::has('cart')? Session::get('cart'):null;
        $cart=new Cart($oldCart);
        $cart->minusCart($product,$id);
        Session::put('cart',$cart);
        return back()->with('massage',"product successfully addd");

       
    }


        
    }
    



