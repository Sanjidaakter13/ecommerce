<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
//use App\Mail\Categorymail;
//use Illuminate\Support\Facades\Mail;


class CategoryController extends Controller
{
    public function category_list()
    {
        $categories=Category::all();
        return view('backend.pages.category.list',compact('categories'));
    }

    public function category_create()
    {
        return view ('backend.pages.category.form');
    }

    public function category_store(Request $request)
    { 
         // dd($request->all());

        $filerename=null;

        if($request->hasFile('cat_image'))
        {
            $file=$request->file('cat_image');
            $filerename="category_".rand(0,100000).date('Ymdhis').".".$file->getClientOriginalExtension();
            $file->storeAs('uploads\categories',$filerename);
        }
        Category::create([
            'name'=>$request->cat_name,
            'status'=>$request->cat_status,
            'description'=>$request->cat_description,
            'image'=>$filerename,
        ]);
        //Mail::to('example@gmail.com')->send(new CategoryMail());
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
        return view ('backend.pages.category.view', compact('category'));
    }

    public function category_edit($id)
    {
        $category= Category::find($id);
       
        // dd($category);
        return view ('backend.pages.category.edit', compact('category'));
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
