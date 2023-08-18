<?php

namespace App\Http\Controllers;

use App\Models\Resource;
use Illuminate\Http\Request;

class ResourceController extends Controller
{

    public function index()
    {
        $resources = Resource::all();
        return view('resource.index',compact('resources'));
    }

 
    public function create()
    {
        return view('resource.create');
    }


    public function store(Request $request )
    {
        Resource::create([
            "name"=>$request->name,
            "is_essential"=>$request->is_esssential,
            "quantity"=>$request->quantity,
            "unit"=>$request->unit,
            "quantity_limit"=>$request->quantity_limit,
            "unit_price"=>$request->unit_price
        ]);
        

        return redirect()->route('resource.index');
    }

  
    public function show(Resource $resource)
    {
        
    }

    public function edit($id)
    {
        $resource = Resource::find($id);
        return view('resource.edit',compact('resource'));
    }


    public function update(Request $request, $id)
    {
        $resource = Resource::find($id);
        $resource->name = $request->name;
        $resource->is_essential = $request->is_essential;
        $resource->quantity = $request->quantity;
        $resource->unit = $request->unit;
        $resource->quantity_limit = $request->quantity_limit;
        $resource->unit_price = $request->unit_price;

        $resource->save();
        
        return redirect()->route('resource.index');
    }

 
    public function destroy($id)
    {
        Resource::where('id',$id)->delete();
        return redirect()->route('resource.index');   
    }
}
