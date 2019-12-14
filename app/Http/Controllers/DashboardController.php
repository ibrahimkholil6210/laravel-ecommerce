<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\User;
use Auth;

class DashboardController extends Controller
{
    //

    public function index(){
    	$user 		= Auth::user();
    	$categories	= Category::all();
    	return view('dashboard.index',compact('user','categories'));
    }

    public function edit($slug){
    	$user = User::where('slug',$slug)->first();
    	$categories	= Category::all();
    	return view('dashboard.edit',compact('user','categories'));
    }
}
