<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use Socialite;
use App\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Redirect;
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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }


  /**
     * Redirect the user to the facebook authentication page.
     *
     * @return Response
     */
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * Obtain the user information from Facebook.
     *
     * @return Response
     */
    public function handleProviderCallback(Request $request, $provider)
    {
        $user = Socialite::driver($provider)->user();
        $authUser = $this->findOrCreateUser($user, $provider);

        Auth::login($authUser, true);

        return Redirect::to('/');
    }

    public function findOrCreateUser($socialuser, $provider)
    {
        $authUser = User::where('social_id', $socialuser->id)->first();
        if ($authUser) {
            return $authUser;
        }else{
            $user = User::create([
                        'name'     => $socialuser->name,
                        'email'    => $socialuser->email,
                        //'provider' => $provider,
                        'social_id' => $socialuser->id
                    ]);

            $user->save();

            $id = $user->id;

            $flag = 170000;
            $Id = $flag + $id;
            $festid = "TCF".(string) $Id;

            $user->fest_id = $festid;
            $user->confirmed = 1;
            
            $user->save();

            return $user;
        }
    }

    public function doLogin()
    {
        // create our user data for the authentication
        $userdata = array(
            'email'     => Input::get('email'),
            'password'  => Input::get('password'),
        );
        // attempt to do the login
        if (Auth::attempt($userdata)) { //attempt checks for hashed password
       
            $user = User::where("email",$userdata['email'])->first(); //query

            Auth::login($user); //accepting user

            // if(! $user->confirmed)
            // {
            //     Flash::message("Please verify your email to continue.");
            //     return Redirect::route('home');
            // }
            return Response()->json(['pass' => 1]);

        }
        else {        
            return Response()->json(['pass' => 0]);
        }
    }

    public function logout(){
        Auth::logout();
        return Redirect::to('/');
    }
}
