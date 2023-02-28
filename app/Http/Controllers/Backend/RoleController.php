<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Permission;


class RoleController extends Controller
{
    public function role_list(){
        $roles=Role::orderby('id','asc')->paginate(5);
        return view('backend.pages.role.list',compact('roles'));
    }

    public function role_create(){
        return view('backend.pages.role.form');
    }

    public function role_store(Request $request){
       
        Role::create([
            'name'=>$request->role_name,
            'status'=>$request->role_status,
        ]);

        return redirect()->route('role.list');
       
    }

    public function role_view($id){
        $roles=Role::find($id);
        return view('backend.pages.role.view',compact('roles'));
    }

    public function role_edit($id){
        $roles=Role::find($id);
        return view('backend.pages.role.edit',compact('roles'));
    }

    public function role_update(Request $request, $id){
        $roles=Role::find($id);
        $roles->update([
            'name'=>$request->role_name,
            'status'=>$request->role_status,
        ]);
        return redirect()->route('role.list');
    }
    
    public function role_delete($id){
       Role::find($id)->delete();

    return redirect()->route('role.list');

    }

    public function role_assignlist($id){
        $role=Role::find($id);
        $permissions=Permission::all();
        return view('backend.pages.role.assign',compact('permissions','role'));
    }
}
