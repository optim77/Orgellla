<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Basket extends Controller
{
    public function show(){
        $id = Auth::id();
        $basket = \App\Basket::find($id)->all();
        print_r($basket);
        return view('basket.show')->with('basket',$basket);
    }
}
