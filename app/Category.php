<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    public function product(){
    	return $this->hasMany('App\Product');
    }

    public function parent(){
    	return $this->belongsTo(Category::class,'parent_id');
    }

    public function subCats()
	{
	    return $this->hasMany(self::class, 'parent_id', 'id');
	}
}
