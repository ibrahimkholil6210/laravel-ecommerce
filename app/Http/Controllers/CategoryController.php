<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Image;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories = Category::all();
        return view('admin.category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::where('parent_id',NULL)->get();
        return view('admin.category.create',compact('categories'));
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
        $attribute = request()->validate([
            'category_title' => 'required|max:255',
            'category_image'  => 'required'
        ]);


        $category = new Category;

        $allowedfileExtension   = ['pdf','jpg','png','jpeg'];
        $files                  = $request->file('category_image');

        $filename               = $files->getClientOriginalName();
        $extension              = $files->getClientOriginalExtension();
        $check                  = in_array($extension,$allowedfileExtension);
        $rename_file            = time().".".$extension;
        $location               = public_path('category_img/'.$rename_file);

        if ($check && Image::make($files)->save($location)) {
            $category->category_name          = $request->category_title;
            $category->parent_id              = $request->category_parent;
            $category->category_image         = $rename_file;
            $category                         = $category->save();

            if ($category) {
                return redirect()->route('category.create')->with('success','Item created successfully!');
            }else{
                return redirect()->route('category.create')->with('error','Problem While Query executing!');
            }
            
        }else{
            return redirect()->route('category.create')->with('error','Problem While uploading image!');
        }   

        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $category   = Category::findOrFail($id);
        $categories = Category::where('parent_id',NULL)->get();
        return view('admin.category.edit',compact('category','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //

        $attribute = request()->validate([
            'category_title' => 'required|max:255'
        ]);


        $category = Category::findOrFail($id);

        $category->category_name          = $request->category_title;
        $category->parent_id              = $request->category_parent;
        $category                         = $category->save();

        if ($category) {
            return redirect()->route('category.index')->with('success','Item edited successfully!');
        }else{
            return redirect()->route('category.index')->with('error','Problem While Query executing!');
        } 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $category = Category::findOrFail($id);
        $delete   = $category->delete();

        if ($delete) {
            return back()->with('success','Category deleted successfully');
        }
    }
}
