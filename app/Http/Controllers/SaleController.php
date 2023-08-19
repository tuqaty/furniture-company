<?php

namespace App\Http\Controllers;

use App\Models\sale;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Event\ViewEvent;

class SaleController extends Controller
{
    
    public function index()
    {
        $sales = Sale::all();
        return view('sale.index',compact('sales'));
    }

    
    public function create()
    {
        return View('sale.create');
    }

    
    public function store(Request $request)
    {
        Sale::create($request->all());
        return redirect()->route('sale.index');
    }

   
    public function show(sale $sale)
    {
        
    }


    public function edit($id)
    {
        $sale = Sale::find($id);
        return view('sale.edit',compact('sale'));
    }

    
    public function update(Request $request, $id)
    {
        $sale = Sale::find($id);   
        $sale->date = $request->date;
        $sale->quantity = $request->quantity;
        $sale->price = $request->price;
        $sale->hall_id = $request->hall_id ;
        $sale->product_id = $request->product_id; 
        $sale->save();
    
        return redirect()->route('sale.index');
    }

    public function destroy($id)
    {
        Sale::where('id',$id)->delete();
        return redirect()->route('sale.index');
    }
}
