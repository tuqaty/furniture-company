<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
        
    public function index()
    {
        $roles = Role::all();
        return view('role.index',compact('roles'));
    }

    
    public function create()
    {
        return View('role.create');
    }

    
    public function store(Request $request)
    {
        Role::create($request->all());
        return redirect()->route('role.index');
    }

   
    public function show(role $role)
    {
        
    }


    public function edit($id)
    {
        $role = Role::find($id);
        return view('role.edit',compact('role'));
    }

    
    public function update(Request $request, $id)
    {
        $role = Role::find($id);   
        $role->name = $request->name;
        $role->slug = $request->slug;
         
        $role->save();
    
        return redirect()->route('role.index');
    }

    public function destroy($id)
    {
        Role::where('id',$id)->delete();
        return redirect()->route('role.index');
    }
}
