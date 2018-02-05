<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Product extends Controller
{
    public function show($slug){
        $product = \App\Product::where('slug',$slug)->get();
        return view('product.product')->with('product',$product);

    }

    public function search(Request $request){
        $phrase = $request->phrase;
        $products = \App\Product::where('name',$phrase)->orWhere('name','like',$phrase.'%')->paginate(15);

        return view('product.search')->with('products',$products);
    }


}
