<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Basket extends Controller
{
    public function show(){
        $id = Auth::id();
        return view('basket.show',['basket' => \App\Basket::find($id)->all()]);
    }
}
