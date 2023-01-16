<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subcategory;

class SubCategoryController extends Controller
{
    public function subcategory_list()
    {
        $subcat=Subcategory::all();
        return view ('backend.pages.subcategory.list',compact('subcat'));
    }

    public function subcategory_create()
    {
        return view ('backend.pages.subcategory.form');
    }

    public function subcategory_store(Request $request)
    {
        // dd($request->all());
        $filerename=null;

        if($request->hasFile('scat_image'))
        {
            $file=$request->file('scat_image');
            $filerename="subcategory_".rand(0,100000).date('Ymdhis').".".$file->getClientOriginalExtension();
            $file->storeAs('uploads\subcategories',$filerename);
        }
        // dd($filerename);
        Subcategory::create([
            'name'=>$request->scat_name,
            'status'=>$request->scat_status,
            'description'=>$request->scat_description,
            'image'=>$filerename,
        ]);
        return redirect()->route('subcategory.list');
    }
}
