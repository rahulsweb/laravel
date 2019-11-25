<?php
namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;

class UserController extends Controller
{


    
    public $successStatus = true;


 /*
    |--------------------------------------------------------------------------
    | User Controller
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
   
    public function login(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ],
            [
                'email.required' => 'Email Required',
                'password.required' => 'Password Required',
            ]

        );

        if ($validator->fails()) {
            return response()->json([

                'status' => false,
                'message' => $validator->errors(),

                'data' => '',
            ], 401);
        }

        if (Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
            $user = Auth::user();
            $success['token'] = $user->createToken('MyApp')->accessToken;
            return response()->json([
                'status' => $this->successStatus,
                'message' => 'Success',

                'data' => [
                    'token' => $success['token'],
                    'data' => $user,

                ],

            ]);
        } else {
            return response()->json([

                'status' => false,
                'message' => 'Email Or Password Does Not Exist',

            ], 401);
        }
    }
/**
 * Register api
 *
 * @return \Illuminate\Http\Response
 */
    public function register(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',

            'email' => 'required|email|unique:users',
            'password' => 'required',
            'c_password' => 'required|same:password',
        ],
            [

                'first_name.required' => 'First Name Required',
                'last_name.required' => 'Last Name Required',
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

        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
        $user->assignRole('customer');
        $success['token'] = $user->createToken('MyApp')->accessToken;

        return response()->json([
            'status' => true,
            'message' => 'Success',
            'data' => $user,

        ]);

    }
/**
 * details api
 *
 * @return \Illuminate\Http\Response
 */
    public function details()
    {
        $user = Auth::user();
        return response()->json([
            'status' => true,
            'message' => 'success',

        ]

        );
    }
}
