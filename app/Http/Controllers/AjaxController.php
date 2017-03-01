<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function index(){

        DB::table('registerfor')->insert([
            ['email' => 'taylor@example.com', 'votes' => 0],
            ['email' => 'dayle@example.com', 'votes' => 0]
        ]);

        $msg = "This is a simple message.";
        return response()->json(array('msg'=> $msg));
    }

}