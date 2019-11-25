<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    //
    /**
     * @param \App\Http\Controllers\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     *ProfileController add Contact us in database
     * also edit ,delete Contact us in related user Contact us if exist
     */


         
    public function getProfileDetails(Request $request)
    {

        $user = User::find(Auth::user()->id);

        if (!$user) {
            return response()->json([

                'status' => false,
                'message' => 'User Not Found',

                'data' => [],
            ], 401);

        }

        return response()->json([

            'status' => true,
            'message' => 'success',

            'data' => $user,
        ], 401);
    }


/**
     * @param \App\Http\Controllers\Request $request
     *ProfileController store method pass one parameter ProfileRequest $request for storing a Profile user related
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     *ProfileController add Contact us in database
     * also edit ,delete Contact us in related user Contact us if exist
     */

     
    public function update(Request $request)
    {

        $user = User::find(Auth::user()->id);
        $location = "";
        $filename = "";
        if ($request->hasFile('profile')) {

            $filename = "";
            $file = $request->file('profile');
            $location = 'User/';

            $filename = time() . "_" . $file->getClientOriginalName();

            $user->profile = $location . $filename;

            $result = $file->move($location, $filename);

        }

        $data = [
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'profile' => $location . $filename,

        ];
        if (!$user->update($data)) {
            return response()->json([

                'status' => false,
                'message' => 'Profile Is Not Updated',

                'data' => $user,
            ], 401);

        }

        return response()->json([

            'status' => true,
            'message' => 'success',

            'data' => $user,
        ], 401);

    }

    
/**
     * @param \App\Http\Controllers\Request $request
     * ProfileController store method pass one parameter ProfileRequest $request for storing a Profile user related
     *User Profile password change 
     *@return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     *ProfileController add Contact us in database
     * also edit ,delete Contact us in related user Contact us if exist
     */



    public function changePassword(Request $request)
    {

        $validatedData = $request->validate([
            'current-password' => 'required',
            'new-password' => 'required|string|min:6|confirmed',
        ]);

        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            // The passwords matches

            return response()->json([

                'status' => false,
                'message' => 'Your current password does not matches with the password you provided. Please try again.',

                'data' => [],
            ], 401);

        }

        if (strcmp($request->get('current-password'), $request->get('new-password')) == 0) {
            //Current password and new password are same

            return response()->json([

                'status' => false,
                'message' => 'New Password cannot be same as your current password. Please choose a different password.',

                'data' => [],
            ], 401);

        }

        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();

        return response()->json([

            'status' => true,
            'message' => 'Your Passsword Successfully Change',

            'data' => $user,
        ], 401);

    }

}
