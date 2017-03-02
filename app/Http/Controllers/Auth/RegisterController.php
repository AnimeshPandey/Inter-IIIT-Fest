<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Hash;
use Redirect;
use Illuminate\Support\Facades\Input;
use Mail;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
   protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

     


    /**
     * Redirect the user to the facebook authentication page.
     *
     * @return Response
     */

    // 2/3/17

   

    public function confirm($confirmation_code)
    {
        if( ! $confirmation_code)
        {
            throw new InvalidConfirmationCodeException;
        }

        $user = User::where('confirmation_code',$confirmation_code)->first();

        if ( ! $user)
        {
            throw new InvalidConfirmationCodeException;
        }

        $user->confirmed = 1;
        $user->confirmation_code = null;
        $user->save();

        Flash::message('You have successfully verified your account.');

        return Redirect::route('login'); // further details
    }

// 2/3/17
    public function redirectToProvider(){

        return redirect('/');
    }

    /**
     * Obtain the user information from Facebook.
     *
     * @return Response
     */

    public function handleProviderCallback(){

        return redirect('/');
    }

    public function Signup(Request $data){

        $user = new User();
        $user->name = $data->name;
        $user->email = $data->email;
        $user->password = Hash::make($data->password); //encrypt password
       // $user->date_of_birth = $data->date_of_birth;
       // $user->gender = $data->gender;

        $user->save(); //saving in db

        $id = $user->id;

        // generate festid
        $flag = 170000;
        $Id = $flag + $user->id;
        $festid = 'TCF'.$Id;


        $user->fest_id = $festid;
        $confirmation_code = str_random(30);
        $user->confirmation_code = $confirmation_code;
        $user->save(); // saving in db

         Mail::send('verify', ['code' => $confirmation_code], function($message) {
            $message->to(Input::get('email'), Input::get('name'))->subject('Verify your email address');
        });

        Flash::message('Thanks for signing up! Please check your email.');

        return Redirect::route('home'); 
        //2/3/17 redirect to details form



}
    public function details(Request $data){
       
        $user = Auth::user();

        $user->contact = $data->contact;
        $user->city = $data->city;
        $user->state = $data->state;
        $user->college = $data->college;
        $user->gender = $data->gender;
        $user->date_of_birth = $data->date_of_birth;
        $user->iiitflag = $data->iiitflag;

        $user->save();
        return Redirect::back();
    }

}