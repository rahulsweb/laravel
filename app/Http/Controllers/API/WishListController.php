<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Product;
use App\WishList;
use Auth;
use Symfony\Component\HttpFoundation\Request;
use Validator;

class WishListController extends Controller
{
    //
    /**
     * @param \App\Http\Controllers\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     *WishlistController add Contact us in database
     * also edit ,delete Contact us in related user Contact us if exist
     


          WishlistController store method pass one parameter WishlistRequest $request for storing a Wishlist user related */

    public function index()
    {
        $products = WishList::with('products')
            ->where('user_id', Auth::user()->id)
            ->get();
        if (!$products->first()) {
            return response()->json([
                'status' => false,
                'message' => 'Product Not Found',

                'data' => [

                    'wishlist' => [],

                ],

            ]);
        }

        return response()->json([
            'status' => true,
            'message' => 'Success',

            'data' => [

                'wishlist' => [$products],

            ],

        ]);

    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [

            'wish' => 'required|numeric',
        ]
        );
        if ($validator->fails()) {
            return response()->json([

                'status' => false,
                'message' => $validator->errors(),

            ], 401);
        }

        $product = Product::find($request->wish);

        if (!$product) {
            return response()->json([

                'status' => false,
                'message' => 'Product Not Found',

                'data' => [],
            ], 401);
        }

        $wishlist = new WishList;
        if (auth()->user()->id) {
            $wishlistData = $wishlist->where('product_id', '=', $request->wish)->where('user_id', '=', auth()->user()->id)->pluck('id');

            if (!$wishlistData->first()) {

                $data = [
                    'user_id' => auth()->user()->id,
                    'product_id' => $request->wish,

                ];

                $wishlist = $wishlist->create($data);
                return response()->json([

                    'status' => true,
                    'message' => 'WishList Add SuccessFully',

                    'data' => [],

                ], 401);

            } else {
                return response()->json([

                    'status' => false,
                    'message' => 'Product Already Added',

                    'data' => [],
                ], 401);
            }

        }
        return response()->json([

            'status' => false,
            'message' => 'Please Login Your Account',

            'data' => [],
        ], 401);
    }

    public function deleteWishlist(Request $request)
    {

        $validator = Validator::make($request->all(), [

            'id' => 'required|numeric',
        ]
        );
        if ($validator->fails()) {
            return response()->json([

                'status' => false,
                'message' => $validator->errors(),

            ], 401);
        }

        $wishlist = WishList::where('id', $request->id)->where('user_id', Auth::user()->id);

        if (!$wishlist->first()) {
            return response()->json([
                'status' => false,
                'message' => 'Wishlist Not Found',

                'data' => [

                ],

            ]);
        }
        $wishlist->delete();
        return response()->json([
            'status' => true,
            'message' => 'Delete Successfully',

            'data' => [

            ],

        ]);

    }

}
