<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\ProductImage;

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
}
