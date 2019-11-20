<?php

namespace App\Http\Controllers\frontend;

use App\Address;
use App\Cart;
use App\Coupon;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;
use Session;

class CheckoutController extends Controller
{
    
/**
     * Checkout Controller  is storing Checkout details related user.
          and  checkout details also store in database.
     *
     * @return \Illuminate\View\View
     */
    
    public function __construct()
    {
        $this->middleware('frontend');

    }
    public function index()
    {
        $coupons = Coupon::where('qty_left', '=', '0')->update(['status' => 'InActive']);
        $coupons = Coupon::where('qty_left', '<>', '0')->latest()->take(5)->get();
        $addresses = Address::all();

        if (!Session::has('cart')) {
            return view('frontend_theme.shop.shopping_cart', ['product' => null]);
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        //
        if (Auth::check()) {
            return view('frontend_theme.shop.checkout', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice, 'addresses' => $addresses, 'coupons' => $coupons]);
        }

        return redirect('login');

    }

    public function getAddress(Request $request, $id)
    {
        $address = Address::find($id);
        return response()->json(['success' => $address]);
    }

    public function addWish(Request $request)
    {

        return view('frontend_theme.shop.wishlist', compact('products'));
    }
}
