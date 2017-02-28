<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialProvider extends Model
{
    //

    protected $fillable = ['provider_id','provider'];
    
    function user()
    {

    	$this->belongsTo(User::class);

    }
}
