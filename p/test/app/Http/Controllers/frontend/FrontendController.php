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
use DB;
class FrontendController extends Controller
{


    
    public function index(Request $request)
    { 

        $keyword = $request->get('search');
      

        if (!empty($keyword)) {  
           $products = Product::where('name', 'LIKE', "%$keyword%")->with('categories')->get();
   
   } else {
            $products=Product::latest()->paginate(5);;  
        }

      
         $categories=Category::all();
        $carts = isset(session('cart')->items) ? session('cart')->items:NULL;
        $sub_category=DB::table('category_product')
        ->join('categories', 'categories.id', '=', 'category_product.category_id')
        ->join('products', 'products.id', '=', 'category_product.product_id')
        ->select('categories.id','categories.name', DB::raw("count(category_product.category_id) as count"))
        ->groupBy('categories.name')
        ->get();


        $sub_category_product=Product::with('categories','product_image')->get();


        $banners=Banner::all();
    
        return view('frontend_theme.index',compact('products','categories','banners','carts','sub_category','sub_category_product'));
    }
    public function subcategory($id)
    {
      
        $sub_category_product=Product::with('categories','product_image')->get();
        $sub_category=DB::table('category_product')
        ->join('categories', 'categories.id', '=', 'category_product.category_id')
        ->join('products', 'products.id', '=', 'category_product.product_id')
        
        
        ->select('categories.id','categories.name', DB::raw("count(category_product.category_id) as count"))
        ->groupBy('categories.name')
        ->get();

        $banners=Banner::all(); 
        $categories=Category::all();
       $products =  Product::with('categories')->whereHas(
        'categories',  function($q) use($id) { $q->where('category_id', $id);
   })->get();
  
    // $products=Product::whereHas('product_category')->get();

 
  return view('frontend_theme.frontend_index.subcategory',compact('products','categories','banners','sub_category','sub_category_product'));
    }


   






    public function getProducts(Request $request)
    {
       $id= $request->id;
    
        $sub_category=Product::with('categories','product_image')->whereHas('categories',function($query) use ($id){
            
            $query->where('category_id','=',$id);

        })->get();

        return $sub_category;
    }



}
