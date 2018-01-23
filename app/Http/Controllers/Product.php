<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Product extends Controller
{
    public function show($slug){
        $product = \App\Product::where('slug',$slug)->get();
        return view('product.product')->with('product',$product);

    }

}
