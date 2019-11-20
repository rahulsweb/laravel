<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{

 /**
     * Display a listing of the resources
     * its manage login user profile details
     * Profile Controller storing data 
     * Profile Controller updating data 

     * display Profile  information on index page
     
     * @return \Illuminate\Http\Response
     */
   

   //profile index method view 
    public function index()
    {

        $users = User::find(auth()->user()->id);
        return view('frontend.profile.index', compact('users'));
    }

    //profile editing method  
    public function edit($id)
    {

        $users = User::findOrFail($id);

        return view('frontend.profile.edit', compact('users'));
    }

    //profile updating method

    public function update(Request $request, $id)
    {

        $user = User::find($id);

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
        $user->update($data);
        return redirect()->back();
    }

        //profile showForm displaying 
    public function showForm()
    {

        $users = User::find(auth()->user()->id);
        return view('frontend.profile.changepassword', compact('users'));
    }

    //profile change password
    
    public function changePassword(Request $request)
    {

        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error", "Your current password does not matches with the password you provided. Please try again.");
        }

        if (strcmp($request->get('current-password'), $request->get('new-password')) == 0) {
            //Current password and new password are same
            return redirect()->back()->with("error", "New Password cannot be same as your current password. Please choose a different password.");
        }

        $validatedData = $request->validate([
            'current-password' => 'required',
            'new-password' => 'required|string|min:6|confirmed',
        ]);

        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();

        return redirect()->back()->with("success", "Password changed successfully !");

    }

    public function contact()
    {
        return view('frontend.profile.contact_us');
    }

}
