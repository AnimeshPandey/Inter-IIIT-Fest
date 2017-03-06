<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\registersfor;
use App\ispartof;

class eventController extends Controller
{
	public function index(){
		if(Auth::check()){
			$reg_events = registersfor::where('fest_id',Auth::user()->fest_id)->pluck('event_id');
			$reg_events_group = ispartof::where('fest_id',Auth::user()->fest_id)->pluck('event_id');
		}
		else
			$reg_events = 0;
			$reg_events_group;
		
		return view('welcome', compact('reg_events','reg_events_group'));
	}

    public function register(Request $data, $type){
    	
    	if($type == 'single'){

    		$reg = new registersfor;
    	
	    	$reg->fest_id = Auth::user()->fest_id;
	    	$reg->event_id = $data->event;
	    	$reg->package = "no";
	
	    	$reg->save();

    		return Response()->json(['registered' => 1]);
    	}
    	else if($type == 'group'){

    		// if(ispartof::where('group_id',$data->group_id)->where('fest_id',Auth::user()->fest_id)->where('event_id',$data->event_id)->count()){
    		// 	return Response()->json(['flag' => 'duplicate']);
    		// }

    		$group_reg = new ispartof;

    		$group_reg->group_id = $data->group_id;
    		$group_reg->fest_id = Auth::user()->fest_id;
    		$group_reg->event_id = $data->event_id;

    		$group_reg->save();

    		return Response()->json(['flag' => 'OK']);
    	}
    }
}
