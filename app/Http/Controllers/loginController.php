<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Auth;
use Socialite;
use App\User;
use Redirect;

class loginController extends Controller
{
    
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

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
            //     return Redirect::route('/');
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
