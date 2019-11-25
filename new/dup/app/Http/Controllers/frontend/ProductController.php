<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *Product Controller storing data 
     *display product information on index page
     *deleting products manage information about products 
     
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('frontend');

    }

    public function show($id)
    {

        $carts = isset(session('cart')->items) ? session('cart')->items : null;
        $products = Product::with('product_image', 'categories', 'product_attribute')->FindOrFail($id);

        return view('frontend_theme.shop.product_details', compact('products', 'carts'));
    }

}
