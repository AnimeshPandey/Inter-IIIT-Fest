<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class AjaxController extends Controller
{
    public function index(){
        
//        $id = Auth::user()->id;

        DB::table('registerfor')->insert([
            ['package' => "no",
            'event_id' => 'AD1',
            'fest_id' => '4365740' ]
        ]);

        $msg = "<input inactive type='submit' value='Registration Sucessfull!'>";
        return response()->json(array('msg'=> $msg));
    }

}