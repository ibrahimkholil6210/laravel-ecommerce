<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    public function country(){
    	return $this->belongsTo('App\Country','country_id','id');
    }

    public function division(){
    	return $this->belongsTo('App\Division');
    }
}
