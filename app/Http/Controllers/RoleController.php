<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;

class RoleController extends Controller
{
    public function addRole()
    {
        return view('tasks.add-role');
    }

    public function getRole()
    {
        $roles = Role::orderBy('id', 'DESC')->get();
        return view('tasks.role', compact('roles'));

    }

    public function createRole(Request $request)
    {
        $role = new Role();
        $role->nama =$request->nama;
        $role->jabatan =$request->jabatan;
        $role->desc =$request->desc;
        $role->save();
        return back()->with('role_created','Berhasil ditambahkan');
    }

}
