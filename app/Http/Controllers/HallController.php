<?php

namespace App\Http\Controllers;

use App\Models\Hall;
use App\Models\Product;
use App\Models\Sale;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use function PHPUnit\Framework\returnSelf;

class HallController extends Controller
{
    public function index()
    {  
       $halls = Hall::all();
       return view('hall.index',compact('halls'));
    }

    
    public function create(Request $request)
    {
        return view('hall.create');
    }

    public function store(Request $request)
    {
       $hall =  Hall::create(
            [
                'address'=> $request->address,
                'telephone'=> $request->telephone,
                'user_id'=> $request->user_id,
                'name'=>$request->name

            ]);
            return redirect()->route('hall.index')->with('status', 'hall added Successfully');
        }


    public function show(hall $hall)
    {
        
    }

    public function edit($id)
    {
        $hall = Hall::find($id);
        return view('hall.edit',compact('hall'));
    }

    public function update(Request $request, $id)
    {
        $hall = Hall::find($id);
        $hall->name = $request->name;
        $hall->address = $request->address;
        $hall->telephone = $request->telephone;
        $hall->user_id = $request->user_id;
        $hall->save();
        return redirect()->route('hall.index')->with('message','hall  updated successfully');
    }


    public function destroy(int  $id)
    {
        Hall::where("id" ,$id )->delete();
        return redirect()->route('hall.index')->with('status', 'hall deleted Successfully');
    }
}
