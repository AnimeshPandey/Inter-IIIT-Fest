<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\registersfor;

class eventController extends Controller
{
	public function index(){
		if(Auth::check())
			$reg_events = registersfor::where('fest_id',Auth::user()->fest_id)->pluck('event_id');
		else
			$reg_events = 0;
		
		return view('welcome', compact('reg_events'));
	}

    public function register(Request $data){
    	
    	$reg = new registersfor;

    	$reg->fest_id = Auth::user()->fest_id;
    	$reg->event_id = $data->event;
    	$reg->package = "no";

    	$reg->save();

    	return Response()->json(['registered' => 1]);
    }
}
