<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Validator;

class ForgotPasswordController extends Controller
{
    //

    use SendsPasswordResetEmails;
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function getResetToken(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => 'required|email',

        ],
            [
                'email.required' => 'Email Required',

            ]

        );

        if ($validator->fails()) {
            return response()->json([

                'status' => false,
                'message' => $validator->errors(),

                'data' => [],
            ], 401);
        }

        $user = User::where('email', $request->email)->first();
        if (!$user) {
            return response()->json([

                'status' => false,
                'message' => 'Email Or Password Does Not Exist',

            ], 401);
        }

        $sent = $this->sendResetLinkEmail($request);

        return ($sent)
        ? response()->json(['status' => true, 'message' => 'Success'])
        : response()->json(['message' => 'Failed']);

    }

    public function sendResetLinkEmail(Request $request)
    {
        $this->validateEmail($request);
        $response = $this->broker()->sendResetLink(
            $request->only('email')
        );
        return $response == Password::RESET_LINK_SENT ? 1 : 0;
    }

}
