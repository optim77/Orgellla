<?php

namespace App\Http\Controllers;

use App\Delivery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Basket extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show(){
        $id = Auth::id();
        $delivers = Delivery::all();
        $basket = \App\Basket::find($id)->get()->all();
        return view('basket.show',['basket' => $basket,'delivery' => Delivery::all()]);
    }

    public function delete($id){
        $user = Auth::id();
        $item = \App\Basket::find($id);
        $item->complete = 0;
        $item->save();
        return redirect('koszyk');
    }
}
