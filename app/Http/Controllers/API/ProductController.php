<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Product;
use App\ProductCategory;
use Illuminate\Http\Request;
use Validator;

class ProductController extends Controller
{
    //
/**
     * ProductController store method pass one parameter ProductRequest $request for storing a Product user related
     * @param \App\Http\Controllers\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     *ProductController add Contact us in database
     * also edit ,delete Contact us in related user Contact us if exist
     */


         
    public function getProductList(Request $request)
    {
        $products = Product::GetAll();

        if (!$products) {
            return response()->json([

                'status' => false,
                'message' => 'Product Not Found',

                'data' => $products,
            ], 401);

        }

        return response()->json([

            'status' => true,
            'message' => 'success',

            'data' => $products,
        ], 401);

    }

    /**
     * ProductController store method pass one parameter ProductRequest $request for storing a Product user related
     * @param \App\Http\Controllers\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     *ProductController add Contact us in database
     * also edit ,delete Contact us in related user Contact us if exist
     */


    public function getProductDetails(Request $request)
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

        $products = Product::with('categories', 'product_image', 'order_carts', 'users', 'product_attribute')->find($request->id);

        if (!$products) {
            return response()->json([

                'status' => false,
                'message' => 'Product Not Found',

                'data' => [],
            ], 401);

        }

        return response()->json([

            'status' => true,
            'message' => 'success',

            'data' => $products,
        ], 401);

    }

    /**
     * ProductController store method pass one parameter ProductRequest $request for storing a Product user related
     * @param \App\Http\Controllers\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     *ProductController add Contact us in database
     * also edit ,delete Contact us in related user Contact us if exist
     */


    public function getProducts(Request $request)
    {

        $validator = Validator::make($request->all(), [

            'category_id' => 'required|numeric',
        ]
        );
        if ($validator->fails()) {
            return response()->json([

                'status' => false,
                'message' => $validator->errors(),

            ], 401);
        }

        $products = ProductCategory::with('products')->where('category_id', '=', $request->category_id)->get();

        if (!$products->first()) {
            return response()->json([

                'status' => false,
                'message' => 'Category Not Found',

                'data' => [],
            ], 401);

        }

        return response()->json([

            'status' => true,
            'message' => 'success',

            'data' => $products,
        ], 401);

    }

}
