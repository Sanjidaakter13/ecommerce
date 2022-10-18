<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;


class CategoryController extends Controller
{
    public function category_list()
    {
        $categories=Category::all();
        return view('backend.category.list',compact('categories'));
    }

    public function category_create()
    {
        return view ('backend.category.form');
    }

    public function category_store(Request $request)
    { 
         // dd($request->all());

        Category::create([
            'name'=>$request->cat_name,
            'status'=>$request->cat_status,
            'description'=>$request->cat_description,
            
        ]);

        return redirect()->route('category.list');
    }

    public function category_delete($id){
        Category::find($id)->delete();

        return redirect()->back();
    }

    public function category_view($id)
    {
        $category= Category::find($id);
       
        // dd($category);
        return view ('backend.category.view', compact('category'));
    }

    public function category_edit($id)
    {
        $category= Category::find($id);
       
        // dd($category);
        return view ('backend.category.edit', compact('category'));
    }

    public function category_update(Request $request, $id)
    {
        $category=Category::find($id);

        $category->update([
            'name'=>$request->name,
            'status'=>$request->status,
            'description'=>$request->description,
        ]);

        return redirect()->route('category.list');
    }
}
