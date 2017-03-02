<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class AjaxController extends Controller
{
    public function index(){

        DB::table('registerfor')->insertGetID([
            [/*'package' => "no",
            'event_id' => 'AD1',*/
            'user_id' => Auth::user() ]
        ]);

        $msg = "Registration Successfull!";
        return response()->json(array('msg'=> $msg));
    }

}