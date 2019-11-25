<?php

namespace App\Http\Controllers\API;

use App\Address;
use App\Http\Controllers\Controller;
use App\Http\Requests\frontend\AddressRequest;
use App\Http\Requests\frontend\AddressUpdateRequest;
use Auth;
use Illuminate\Http\Request;
use Validator;

class AddressController extends Controller
{
    //
    /**
     * @param \App\Http\Controllers\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * AddressController add address in database
     * also edit ,delete addresses in related user address if exist
     */

    
    public function index(Request $request)
    {

        $address = Address::where('user_id', Auth()->user()->id)->latest()->get();

        if (!$address->first()) {
            return response()->json([

                'status' => false,
                'message' => 'Address Not Found',
                'data' => $address,

            ], 401);
        }
        return response()->json([

            'status' => true,
            'message' => 'Success',
            'data' => $address,

        ], 401);
    }


       /**
     * Address Controller CustomerIndex
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return the json object of the states
     */ 

    public function store(AddressRequest $request)
    {

        $data = $request->all();
        $address = new Address;
        $data['user_id'] = auth()->user()->id;
        $addressData = $address->create($data);
        if (!$addressData) {
            return response()->json([

                'status' => false,
                'message' => 'Address is not inserted in A database',
                'data' => [],

            ], 401);
        }

        return response()->json([

            'status' => true,
            'message' => 'SuccessFully inserted Address in database',
            'data' => $addressData,

        ], 401);
    }

    /**
     * AddressController store method pass one parameter AddressUpdate $request for update a *address user related

     *
     * @param \Illuminate\Http\Request $request
     *
     * @return the json object of the states
     */

    public function update(AddressUpdateRequest $request)
    {

        $requestData = $request->all();
        $address = Address::find($request->id);

        if (!isset($address->id)) {
            return response()->json([

                'status' => false,
                'message' => 'Address is not Updated in A database',
                'data' => [],

            ], 401);
        }
        $address->update($requestData);

        return response()->json([

            'status' => true,
            'message' => 'Update your Address Successfully',
            'data' => $address,

        ], 401);
    }

    /**
     *  AddressController destroy method pass one parameter Request $request for deleting a address user related

     *
     * @param \Illuminate\Http\Request $request
     *
     * @return the json object of the states
     */

    
    
    public function destroy(Request $request)
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

        $address = Address::find($request->id);
        if (!isset($address->id)) {
            return response()->json([

                'status' => false,
                'message' => 'Address is not Found',
                'data' => [],

            ], 401);
        }
        $address->delete();

        return response()->json([

            'status' => true,
            'message' => 'Address is Deleted Successfully',
            'data' => [],

        ], 401);
    }
}
