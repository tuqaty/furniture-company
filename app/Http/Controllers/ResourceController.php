<?php

namespace App\Http\Controllers;

use App\Models\Resource;
use Illuminate\Http\Request;

class ResourceController extends Controller
{

    public function index()
    {
        $resources = Resource::all();
        return view('resources.index',compact('resources'));
    }

 
    public function create()
    {
        
    }


    public function store(Request $request)
    {
        
    }

  
    public function show(Resource $resource)
    {
        
    }

    public function edit(Resource $resource)
    {
        
    }


    public function update(Request $request, Resource $resource)
    {
        
    }

 
    public function destroy(Resource $resource)
    {
        
    }
}
