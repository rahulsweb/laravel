<?php


namespace App\Http\Controllers\frontend;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Session;
use Mail;
use App\Mail\AdminRegisterUser;
use App\Mail\RegisterUser;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = 'localhost:8000';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('web');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
       
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(Request  $request)
    {
    
        return view('frontend.login.register',['formMode' => 'create']);
    
     
    }
    public function store(Request $request)
    {

        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'password' => 'required|min:8|same:confirm_password',
            'email' => 'required|email|unique:users',

            'confirm_password'=>'required'
      
        ]);



        $user = array(
            'name'=>$request->input('name'),
            'lastname'=>$request->input('lastname'),
            'email'=>$request->input('email'),
            'password'=>$request->input('password')
           );


        $user = (object)$user;
     
     

       $users=new User;
            $users->first_name=$request->first_name;
            $users->last_name=$request->last_name;
            $users->email=$request->email;
            $users->password=Hash::make($request->password);
            $users->assignRole('customer');
         
       
            if($users->save())
      {

        Mail::to($user->email)->send(new RegisterUser($user));

        Mail::to($user->email)->send(new AdminRegisterUser($user));
        Session::put('register', 'Registration Is Successfully');
        return redirect('login');

      }
     
        Session::put('register', 'Your Registraion not successfully done');
        return redirect('login');
   

        
    }

}
