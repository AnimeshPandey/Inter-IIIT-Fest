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
        //dd($user);
        $authUser = $this->findOrCreateUser($user, $provider);
        Auth::login($authUser, true);

        return Redirect::to('/register/details');
    }

    public function findOrCreateUser($user, $provider)
    {
        $authUser = User::where('email', $user->email)->first();
        if ($authUser) {
            return $authUser;
        }else{
           return User::create([
                'name'     => $user->name,
                'email'    => $user->email,
                //'provider' => $provider,
                'social_id' => $user->id
           ]);
        }
    }

    public function doLogin()
{
        // validate the info, create rules for the inputs
        $rules = array(
        'email'    => 'required|email', // make sure the email is an actual email
        'password' => 'required|alphaNum|min:6' // password can only be alphanumeric and has to be greater than 3 characters
        );  

        // run the validation rules on the inputs from the form
        $validator = Validator::make(Input::all(), $rules);

        // if the validator fails, redirect back to the form
        if ($validator->fails()) {
        
        return Redirect::to('login')
            ->withErrors($validator) // send back all errors to the login form
            ->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
        }

         else {

        // create our user data for the authentication
        $userdata = array(
            'email'     => Input::get('email'),
            'password'  => Input::get('password'),

        );


       
        // attempt to do the login
        if (Auth::attempt($userdata)) { //attempt checks for hashed password

       
            $user = User::where("email",$userdata['email'])->first(); //query
            Auth::login($user); //accepting user

             if(! $user->confirmed)
          {
            Flash::message("Please verify your email to continue.");
            return Redirect::route('home');
          }

            return Auth::user();

        }

        else {        

            // validation not successful, send back to form 
            return Redirect::to('login');

        }

    }
    }
}
