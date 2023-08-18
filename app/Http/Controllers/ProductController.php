<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
 
    public function index()
    {
        $products = Product::all();
        return view('product.index',compact('products'));
    }

    public function create()
    {
        return view('product.create');
    }

    public function store(Request $request)
    {
        $file_extension = $request->image->getClientOriginalExtension();

        $file_name = $file_extension;
        $path = 'image/product';
        $request->image->move($path,$file_name);

        Product::create([
            "name"=>$request->name , 
            "description"=>$request->description,
            "profit_rate"=>$request->profit_rate,
            "image"=>$file_name
        ]);

        return redirect()->route('product.index');
    }

  
    public function show(Product $product)
    {
        
    }

   
    public function edit($id)
    {
        $product = Product::find($id);
        return view('product.edit',compact('product'));
    }

    
    public function update(Request $request,$id)
    {   
        $file_extension = $request->image->getClientOriginalExtension();
        $file_name = $file_extension;
        $path = 'image/user';
        $request->image->move($path,$file_name);

        $product = Product::find($id);
        $product->name = $request->name ; 
        $product->description = $request->description ;
        $product -> profit_rate = $request->profit_rate;
        $product->image = $file_name;
        $product->save();

        return redirect()->route('product.index');
    }

    
    public function destroy($id)
    {
        Product::where('id',$id)->delete();
        return redirect()->route('product.index');
    }
}
