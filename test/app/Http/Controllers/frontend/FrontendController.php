<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Auth;
use App\Category;
use App\Product;
use App\ProductCategory;
use App\User;
use Session;
use App\Cart;
use App\Banner;
use App\Order;
use DB;
class FrontendController extends Controller
{


    
    public function index(Request $request)
    { 

        $keyword = $request->get('search');
      

        if (!empty($keyword)) {  
           $products = Product::where('name', 'LIKE', "%$keyword%")
          
          
           ->orwhereHas('categories',function($query) use ($keyword){
            
            $query->where('name', 'LIKE', "%$keyword%");
           
   
        })->where('qty_left','<>',0)->with('categories')->latest()->paginate(6);
   
   } else {
            $products=Product::where('qty_left','<>',0)->latest()->paginate(6); 
        }

      
         $categories=Category::all();
        $carts = isset(session('cart')->items) ? session('cart')->items:NULL;
        $sub_category=DB::table('category_product')
        ->join('categories', 'categories.id', '=', 'category_product.category_id')
        ->join('products', 'products.id', '=', 'category_product.product_id')
        ->where('products.qty_left','<>',0)
        ->select('categories.id','categories.name', DB::raw("count(category_product.category_id) as count"))
        ->groupBy('categories.name')
        ->get();


        $sub_category_product=Product::with('categories','product_image')->where('qty_left','<>',0)->get();


        $banners=Banner::all();
    
        return view('frontend_theme.index',compact('products','categories','banners','carts','sub_category','sub_category_product'));
    }
    public function subcategory($id)
    {
      
        $sub_category_product=Product::with('categories','product_image')->where('qty_left','<>',0)->get();
        $sub_category=DB::table('category_product')
        ->join('categories', 'categories.id', '=', 'category_product.category_id')
        ->join('products', 'products.id', '=', 'category_product.product_id')
        ->where('products.qty_left','<>',0)
        
        ->select('categories.id','categories.name', DB::raw("count(category_product.category_id) as count"))
        ->groupBy('categories.name')
        ->get();

        $banners=Banner::all(); 
        $categories=Category::all();
       $products =  Product::with('categories')->whereHas(
        'categories',  function($q) use($id) { $q->where('category_id', $id);
   })->where('qty_left','<>',0)->get();
  
    // $products=Product::whereHas('product_category')->get();

 
  return view('frontend_theme.frontend_index.subcategory',compact('products','categories','banners','sub_category','sub_category_product'));
    }


   






    public function getProducts(Request $request)
    {
       $id= $request->id;
    
        $sub_category=Product::with('categories','product_image')->whereHas('categories',function($query) use ($id){
            
            $query->where('category_id','=',$id);

        })->where('qty_left','<>',0)->get();

        return $sub_category;
    }

    // public function test()
    // {
    //     $products=DB::table('order_cart_details')
    //     ->join('products', 'order_cart_details.product_id', '=', 'products.id')

    //     ->select('products.id','products.name', DB::raw("sum(order_cart_details.qty) as count"))
    //     ->groupBy('products.id')
    //     ->get();

    //     foreach($products as $item)
    //     {
    //         $product=Product::with('product_attribute')->where('id','=',$item->id)->first();
    //        $product->qty_left=$product->product_attribute->quantity-$item->count;
    //        $product->update(['qty_left'=>$product->qty_left]);
    //     }
    //     return view('check',compact('products'));
    // }

    public function test()
    {
        $product= Product::with('product_attribute')->find(61);
        $product->qty_left= $product->product_attribute->quantity-$product->qty_left;
       
     
    }


}
