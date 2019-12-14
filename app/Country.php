<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    //
    public function division(){
    	return $this->hasMany('App\Division');
    }

    public function city(){
    	return $this->hasMany('App\district');
    }
}
