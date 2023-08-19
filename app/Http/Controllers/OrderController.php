<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
        
    public function index()
    {
        $orders = Order::all();
        return view('order.index',compact('orders'));
    }

    
    public function create()
    {
        return View('order.create');
    }

    
    public function store(Request $request)
    {
        Order::create($request->all());
        return redirect()->route('order.index');
    }

   
    public function show(order $order)
    {
        
    }


    public function edit($id)
    {
        $order = Order::find($id);
        return view('order.edit',compact('order'));
    }

    
    public function update(Request $request, $id)
    {
        $order = Order::find($id);   
        $order->date = $request->date;
        $order->note = $request->note;
        $order->status = $request->status;
        $order->hall_id = $request->hall_id ;
        $order->save();
    
        return redirect()->route('order.index');
    }

    public function destroy($id)
    {
        Order::where('id',$id)->delete();
        return redirect()->route('order.index');
    }
}
