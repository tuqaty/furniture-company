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
        // Hall::create($request);
        return view('hall.create');
    }

    public function store(Request $request)
    {

    }


    public function show(hall $hall)
    {
        
    }

    public function edit(hall $hall)
    {
        
    }

    public function update(Request $request, hall $hall)
    {
        
    }


    public function destroy(hall $hall)
    {
        
    }
}
