<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class PageController extends Controller
{
    //
    public function home(){
    	return view('index');
    }

    public function productshow(){
    	$product = Product::all();
        return view('product',compact('product'));
    }
}
