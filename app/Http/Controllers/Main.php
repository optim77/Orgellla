<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Main extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth',['only' =>]);
    }

    public function index(){
        $categories = Category::all();

        $products = Product::all();
        return view('main.base',compact('products','categories'));
    }

}
