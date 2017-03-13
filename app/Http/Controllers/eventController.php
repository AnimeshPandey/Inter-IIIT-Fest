<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\registersfor;
use App\ispartof;
use App\group;
use App\User;

class eventController extends Controller
{

    public function index(){
        if(Auth::check()){
            $reg_events_single = registersfor::where('fest_id',Auth::user()->fest_id)->pluck('event_id');
            $reg_events_group = ispartof::where('fest_id',Auth::user()->fest_id)->pluck('event_id');
        }
        else{
            $reg_events_single = 0;
            $reg_events_group = 0;
        }
        
        return view('welcome', compact('reg_events_single','reg_events_group'));
    }

	public function beta(){
		if(Auth::check()){
			$reg_events_single = registersfor::where('fest_id',Auth::user()->fest_id)->pluck('event_id');
			$reg_events_group = ispartof::where('fest_id',Auth::user()->fest_id)->pluck('event_id');
		}
		else{
			$reg_events_single = 0;
			$reg_events_group = 0;
        }
		
		return view('welcome', compact('reg_events_single','reg_events_group'));
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

            $group = new group;

            $group->group_name = $data->group_name;
            $group->college = $data->group_college;

            $group->save();

            $id = $group->id;
            $count = 170000 + $id;
            $groupid = "TCFG".$count;

            $group->group_id = $groupid;

            $group->save();

            // return Response()->json(['created' => 1, "groupid" => $groupid]);

            foreach($data->members as $member_id){
                $group_reg = new ispartof;

                $group_reg->group_id = $group->group_id;
                $group_reg->event_id = $data->event_id;
                $group_reg->fest_id = $member_id;

                $group_reg->save();
            }

    		return Response()->json(['created' => 1 ,'groupid' => $groupid]);
    	}
    }

    public function checkfestid(Request $data){

        $count = User::where('fest_id',$data->festid)->get()->count();

        return response()->json(['count' => $count]);

    }
}
