<?php

namespace App\Http\Controllers\frontend;

use App\Banner;
use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use App\ProductCategory;
use Illuminate\Http\Request;

class FrontendController extends Controller
{

    /**
     * Frontend Controller listing data or product display on index page 
       all products new updated store in database listing in index page 

        
     *
     * @return \Illuminate\View\View
     */


       //display data on index page 
       
    public function index(Request $request)
    {

        $keyword = $request->get('search');
        $products = Product::Active();
        if (!empty($keyword)) {
            $products = Product::Search($keyword);

        }

        $categories = Category::all();
        $carts = isset(session('cart')->items) ? session('cart')->items : null;
        $subCategory = ProductCategory::ProductCategory();

        $subCategoryProduct = Product::QtyLeft();

        $banners = Banner::all();

        return view('frontend_theme.index', compact('products', 'categories', 'banners', 'carts', 'subCategory', 'subCategoryProduct'));
    }
    
    //subcategory details  related to products using id 

    public function subCategory($id)
    {

        $subCategoryProduct = Product::QtyLeft();
        $subCategory = ProductCategory::ProductCategory();

        $banners = Banner::all();
        $categories = Category::all();
        $products = Product::CategoryActive($id);

        return view('frontend_theme.frontend_index.subcategory', compact('products', 'categories', 'banners', 'subCategory', 'subCategoryProduct'));
    }

    // all products details fetch and display on index side bar
    public function getProducts(Request $request)
    {
        $id = $request->id;

        $subCategory = Product::StatusActive($id);

        return $subCategory;
    }

}
