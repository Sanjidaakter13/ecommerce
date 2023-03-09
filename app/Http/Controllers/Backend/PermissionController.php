<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RolePermission;

class PermissionController extends Controller
{
    public function permission_list(){
        return view('backend.pages.permission.list');
    }

    public function assignPermissions(Request $request , $role_id){
        //dd($request->all());
        foreach($request->permission as $permission){
            $permission_ids=$role->permissions->pluck('permission_id')->toArray();
            RolePermission::create([
                'role_id'=>$role_id,
                'permission_id'=>$permission
            ]);
        }
    }
}
