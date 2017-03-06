<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Hash;
use App\User;
use App\group;

class registerController extends Controller
{
    public function confirm($confirmation_code)
    {
        if( ! $confirmation_code){
            throw new InvalidConfirmationCodeException;
        }

        $user = User::where('confirmation_code',$confirmation_code)->first();
        
        if ( ! $user){
            throw new InvalidConfirmationCodeException;
        }

        $user->confirmed = 1;
        $user->confirmation_code = null;
        $user->save();

        // Flash::message('You have successfully verified your account.');
        // return Redirect::route('login'); // further details
    }

    public function Signup(Request $data){

        $user = new User;
        $user->name = $data->name;
        $user->email = $data->email;
        $user->password = Hash::make($data->password); //encrypt password

        $user->save(); //saving in db

        $id = $user->id;

        $flag = 170000;
        $Id = $flag + $id;
        $festid = "TCF".(string) $Id;

        $user->fest_id = $festid;
        $confirmation_code = str_random(30);
        $user->confirmation_code = $confirmation_code;
        
        $user->save(); // saving in db

        // Mail::send('verify', ['code' => $confirmation_code], function($message) {
        //     $message->to(Input::get('email'), Input::get('name'))->subject('Verify your email address');
        // });

        // Flash::message('Thanks for signing up! Please check your email.');

        Auth::login($user);

        return Response()->json(['festid' => $festid, 'name' => $user->name]);

}
    public function details(Request $data){
       
        $user = Auth::user();

        $user->contact = $data->contact;
        $user->city = $data->city;
        $user->state = $data->state;
        $user->gender = $data->gender;
        $user->date_of_birth = $data->date_of_birth;
        $user->iiitflag = $data->iiitflag;
        if($data->iiitflag == 'Yes')
            $user->college = $data->college_iiit;
        else
            $user->college = $data->college_other;
        $user->save();
        
        return Response()->json(['success' => 1]);
    }

    public function group(Request $data){

        $group = new group;

        $group->name = $data->group_name;
        $group->college = $data->group_college;

        $group->save();

        $id = $group->id;
        $count = 170000 + $id;
        $groupid = "TCFG".$count;

        $group->group_id = $groupid;

        $group->save();

        return Response()->json(['created' => 1, "groupid" => $groupid]);

    }

}
