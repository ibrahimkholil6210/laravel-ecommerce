<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\ProductImage;
use App\Country;
use App\Division;
use App\District;

class PageController extends Controller
{
    //
    public function home(){
    	$product  	= Product::all();
    	$categories = Category::all();
    	return view('index',compact('product','categories'));
    }

    public function productshow(){
    	$product = Product::all();
        $categories = Category::all();
        return view('product',compact('product','categories'));
    }

    public function productdetails($slug){
        $product = Product::where('slug',$slug)->get();
        $categories = Category::all();
        
        return view('show',compact('product','categories'));
    }

    public function search(Request $term){
        $get_str = $term->term;
        $product = Product::where('product_name','LIKE','%'.$get_str.'%')->orWhere('product_description','LIKE','%'.$get_str.'%')->get();
        $categories= Category::all();
        return view('search',compact('product','categories','get_str'));
    }

    public function category(){
        $categories = Category::all();
        return view('category',compact('categories'));
    }

    public function categoryfind($id){
        $category    = Category::findOrFail($id);
        $categories  = Category::all();

        return view('categoryProduct',compact('category','categories'));
    }

    public function login(){
        $categories = Category::all();

        return view('auth.login',compact('categories'));
    }

    public function register(){
        $categories = Category::all();
        $country    = Country::all();
        $division   = Division::all();
        $district   = District::all();
        return view('auth.register',compact('categories','country','division','district'));
    }

    public function reset(){
        $categories = Category::all();

        return view('auth.passwords.email',compact('categories'));
    }

    public function addToCart(Request $request){
        $product = Product::find($request->product_id);
    }
}
