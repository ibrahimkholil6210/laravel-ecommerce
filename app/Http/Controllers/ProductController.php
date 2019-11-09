<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = Product::all();

        return view('admin.product.index')->with('products',$products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $validation = $request->validate([
                                            'product_title' => 'required',
                                            'product_description' => 'required',
                                            'product_category' => 'required',
                                            'product_quantity' => 'required',
                                            'product_price' => 'required',
                                            'product_image' => 'required',
                                        ]);

        $product = new Product;



        $product->product_name          = $request->product_title;
        $product->product_description   = $request->product_description;
        $product->product_category      = $request->product_category;
        $product->product_quantity      = $request->product_quantity;
        $product->product_price         = $request->product_price;
        $product->slug                  = str_slug($request->product_title);

        $save                           = $product->save();
        if ($save) {

            $allowedfileExtension   = ['pdf','jpg','png','jpeg'];
            $files                  = $request->file('product_image');

            $filename               = $files->getClientOriginalName();
            $extension              = $files->getClientOriginalExtension();
            $check                  = in_array($extension,$allowedfileExtension);
            $rename_file            = time().".".$extension;
            $location               = public_path('product/'.$rename_file);

            if ($check && Image::make($files)->save($location)) {
                $product_imageobj                   = new ProductImage;
                $product_imageobj->product_id       = $product->id;
                $product_imageobj->product_images   = $rename_file;
                $product_image_save                 = $product_imageobj->save();

                if ($product_image_save) {
                    return redirect()->route('product.create')->with('success','Item created successfully!');
                }else{
                    return redirect()->route('product.create')->with('error','Problem While inserting image!');
                }
                
            }else{
                return redirect()->route('product.create')->with('error','Problem While uploading image!');
            }   

        }else{
            return redirect()->route('product.create')->with('error','Problem While Inserting Data!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

        $product = Product::findOrFail($id);


        return view('admin.product.show',compact('product','img'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($product)
    {
        //
        $product = Product::findOrFail($product);
        return view('admin.product.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $validation = $request->validate([
                                            'product_title' => 'required',
                                            'product_description' => 'required',
                                            'product_category' => 'required',
                                            'product_quantity' => 'required',
                                            'product_price' => 'required',
                                        ]);

        $product = Product::findOrFail($id);



        $product->product_name          = $request->product_title;
        $product->product_description   = $request->product_description;
        $product->product_category      = $request->product_category;
        $product->product_quantity      = $request->product_quantity;
        $product->product_price         = $request->product_price;
        $product->slug                  = str_slug($request->product_title);

        $save                           = $product->save();
        if ($save) {

            return redirect()->route('product.index')->with('success','Item updated successfully!');  

        }else{
            return redirect()->route('product.index')->with('error','Problem While Updating Data!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $product = Product::findOrFail($id);
        $action = $product->delete();

        if ($action) {
            return back()->with('success','Product Deleted successfully');
        }
    }
}
