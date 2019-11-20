<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\User;
use DB;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Validator;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
     */

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }
    public function reset(Request $request)
    {

        $validator = Validator::make($request->all(), [

            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'c_password' => 'required|same:password',
        ],
            [

                'token.required' => 'token is required',
                'email.required' => 'Email Required',
                'password.required' => 'Password Required',
                'c_password.required' => 'Confirm Password Required',

            ]

        );
        if ($validator->fails()) {
            return response()->json([

                'status' => false,
                'message' => $validator->errors(),

            ], 401);
        }
        $tokenData = DB::table('password_resets')
            ->where('email', $request->email)->first();

        if (Hash::check($request->token, $tokenData->token)) {
            $user = User::where('email', $request->email)->first();
            if ($user) {
                $user->password = Hash::make($request->password);

                $user->setRememberToken(Str::random(60));

                if ($user->save()) {
                    return response()->json([

                        'status' => true,
                        'message' => 'Your Password Successfully Changes',

                    ], 401);
                }

            }
        } else {
            return response()->json([

                'status' => false,
                'message' => 'Email Or Password Does Not Exist',

            ], 401);
        }

    }

}
