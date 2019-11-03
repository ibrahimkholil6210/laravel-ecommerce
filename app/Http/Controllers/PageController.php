<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function home(){
    	return view('index');
    }
    public function product_create(){
    	return view('admin.product.create');
    }
}
