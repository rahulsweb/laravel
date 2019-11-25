<?php

namespace App\Http\Controllers\frontend;

use App\Cart;
use App\Http\Controllers\Controller;
use App\Product;
use App\ProductImage;
use App\WishList;
use Illuminate\Http\Request;

class WishListController extends Controller
{
    
       /**
     * Display a listing of the resource.

     * Wishlist  Controller manage wishlist data and also manage user  information  
     * About Wishlist data related to the database
     * @return \Illuminate\Http\Response
     */
 
    public function __construct()
    {
        $this->middleware('frontend');

    }
    //index method used to displaying listing information 

    public function index()
    {

        $products = Product::with('users', 'product_image', 'product_attribute', 'categories')->get();
        $productImage = ProductImage::all();
        if (!Session::has('cart')) {
            return view('frontend_theme.shop.wishlist', compact('products', 'productImage'));
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        return view('frontend_theme.shop.wishlist', compact('products', 'cart', 'productImage'));

    }
    //Storing data about wishlist 
    public function store(Request $request)
    {

        $wishlist = new WishList;
        if (auth()->user()->id) {
            $wishlistData = $wishlist->where('product_id', '=', $request->wish)->where('user_id', '=', auth()->user()->id)->pluck('id');

            if (!count($wishlistData)) {

                $data = [
                    'user_id' => auth()->user()->id,
                    'product_id' => $request->wish,

                ];

                $wishlist->create($data);

            }

            return back()->with('wishlistData', "WishList add Successfully");
        }
        return back()->with('wishlistData', "please Login Your Account");
    }

    //Delete wishlist Information 
    public function deleteWish($id)
    {

        $wishlist = WishList::where('product_id', $id)->where('user_id', auth()->user()->id);
        $wishlist->delete();

        return back()->with('message', "WishList Remove Successfully");

    }

}
