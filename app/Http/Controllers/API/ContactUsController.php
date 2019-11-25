<?php

namespace App\Http\Controllers\API;

use App\ContactUs;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;

class ContactUsController extends Controller
{
    //
 
   /**
      *   ContactUSController store method pass one parameter ContactUSRequest $request for storing *  ContactUS user related

     * @param \App\Http\Controllers\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     *ContactUsController add Contact us in database
     * also edit ,delete Contact us in related user Contact us if exist
     */


         
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [

            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'contact' => 'required|numeric|digits:10',
            'message' => 'required',

        ],
            [

                'name.required' => 'name is required',
                'email.required' => 'Email Required',
                'subject.required' => 'subject Required',
                'message.required' => 'message Required',
                'contact.required' => 'contact required',
                'contact.digits' => 'contact number must be 10 digit',

            ]

        );
        if ($validator->fails()) {
            return response()->json([

                'status' => false,
                'message' => $validator->errors(),

            ], 401);
        }

        $requestData = $request->all();

        ContactUs::create($requestData);
        return response()->json([

            'status' => true,
            'message' => 'thank you for contact us',
            'data' => [],

        ], 401);

    }

}
