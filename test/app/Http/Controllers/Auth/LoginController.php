<?php
   
namespace App\Http\Controllers\Auth;
   
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Socialite;
use Auth;
use Exception;
use App\User;
use Artisan;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */
   
    use AuthenticatesUsers;
   
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = 'admin/user';
   
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
   
    public function redirectToGoogle()
    {

         return Socialite::driver('google')->redirect();

    }
   
    public function handleGoogleCallback()
    {
         try {
            $user = Socialite::driver('google')->user();
        
        } catch (Exception $e) {
            return Redirect('auth/google');
         }

        $authUser = $this->findOrCreateUser($user);

        Auth::login($authUser, true);
        return Redirect('/');
       
     
        
    }








// github login

public function redirectToProvider()
{
    return Socialite::driver('github')->redirect();
}

/**
 * Obtain the user information from GitHub.
 *
 * @return \Illuminate\Http\Response
 */
public function handleProviderCallback()
{
    

    try {
        $user = Socialite::driver('github')->user();    
    } catch (Exception $e) {
        return Redirect('login/github');
     }

    $authUser = $this->github_create($user);

    Auth::login($authUser, true);
 
    return Redirect('/');
}






private function github_create($githubUser)
{
  
    if ($authUser = User::where('github_id', $githubUser->id)->first()) {
    
        return $authUser;
    }


    if ($authUser = User::where('email', $githubUser->email)->first()) {
    
        return $authUser;
    }
    return User::create([
        'first_name' => $githubUser->nickname,
        'last_name'=>"",
        'email' => $githubUser->email,
        'github_id' => $githubUser->id,
        'password'=>"",
        
    ]);
}


    private function findOrCreateUser($googleUser)
    {
        if ($authUser = User::where('google_id', $googleUser->id)->first()) {
            return $authUser;
        }
        if ($authUser = User::where('email', $googleUser->email)->first()) {
            return $authUser;
        }
        return User::create([
            'first_name' => $googleUser->name,
            'last_name'=>"",
            'email' => $googleUser->email,
            'google_id' => $googleUser->id,
            'password'=>"",
            
        ]);
    }
    



}