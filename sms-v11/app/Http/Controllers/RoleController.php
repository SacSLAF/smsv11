<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Permission;

class RoleController extends Controller
{
    public function list()
    {
        $data['getRecord'] = Role::getRecord();
        return view('panel.roles.list',$data);
    }

    public function add()
    {
        $getPermission = Permission::getPermission();
        $data['getPermission'] = $getPermission;
        return view('panel.roles.add',$data);
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required',
        ]);

        $role = new Role();
        $role->name = $request->name;
        $role->save();

        return redirect('/panel/roles')->with('success', 'Role added successfully');

    }

    public function edit($id)
    {
        $data['getSingle'] = Role::getSingle($id);
        return view('panel.roles.edit',$data);
    }

    public function update($id,Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required',
        ]);

        $role = Role::find($id);
        $role->name = $request->name;
        $role->save();

        return redirect('/panel/roles')->with('success', 'Role updated successfully');

    }

    public function destroy($id)
    {
        $role = Role::find($id);
        $role->delete();

        return redirect('/panel/roles')->with('success', 'Role deleted successfully');
    }
}
