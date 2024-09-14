<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;

class RoleController extends Controller
{
    //
    public function index()
    {
        $role=Role::orderBy('created_at', 'desc')->get();
       return view('role-permission.role.index',['roles'=>$role]);
    }

    public function create()
    {
        return view('role-permission.role.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => [
                'required',
                'string',
                'unique:roles,name', 
            ],
        ]);
        

        Role::create([
            'name'=>$request->name
        ]);

        return redirect('roles')->with('status','Role Created Successfully!');
    }

    public function edit(Role $role)
    {
        return view('role-permission.role.edit',['role'=>$role]);
    }

    public function update(Request $request, Role $role)
    {
        // Validate the request
        $request->validate([
            'name' => [
                'required',
                'string',
                'unique:roles,name,' . $role->id, // Ensures the name is unique except for the current permission
            ],
        ]);
    
        // Update the permission using the instance method
        $role->update([
            'name' => $request->name,
        ]);
    
        // Redirect back with a success message
        return redirect('roles')->with('status', 'Role Updated Successfully!');
    }
    
    public function destroy($roleId)
    {
        $role= Role::find($roleId);
        $role->delete();
        return redirect('roles')->with('status', 'Roles Removed Successfully!');
    }


    public function addPermissionToRole($roleId)
    {
        $permissions=  Permission::get();
        $role= Role::findorfail($roleId);
        $rolePermission = DB::table('role_has_permissions')
                                ->where('role_has_permissions.role_id',$role->id)
                                ->pluck('role_has_permissions.permission_id','role_has_permissions.permission_id')
                                ->all();
        return view('role-permission.role.add-permissions',
                ['role'=>$role,
                'permissions'=>$permissions,
                'rolePermissions'=>$rolePermission

                
            ]);
    }

    public function givePermissionToRole(Request $request,$roleId)
    {
        $request->validate([
            'permission'=>'required'
        ]);
        $role= Role::findorFail($roleId);
        $role->syncPermissions($request->permission);
        return redirect()->back()->with('status','Permission added to role');
    }

}
