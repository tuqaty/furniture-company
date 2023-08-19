<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\User;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;

class DepartmentsController extends Controller
{
    
    public function index()
    {
        $depts = Department::all();
        $mgrs =User::all();
         return view('dep.index',compact('depts','mgrs'));
    }

    
    public function create()
    {
       $users = User::whereNotIn('id', User::whereHas('department')->pluck('id'))->get();
       $users = User::whereNotIn('id', User::whereHas('hall')->pluck('id'))->get();

        return view('dep.create',compact('users'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'hour_price' => 'required|max:6',
        ]);

        Department::create($request->all());

        return redirect()->route('dep.index')
        ->with('success');
    }

    public function show(Department $departments)
    {
        
    }


    public function edit(Department $departments)
    {
        
    }


    public function update(Request $request, Department $departments)
    {
        
    }

  
    public function destroy($id)
    {

        Department::find($id)->delete();
        return  redirect()->route('dep.index')
        ->with('success');
    }
}
