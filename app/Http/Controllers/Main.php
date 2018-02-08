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

        $user = User::find(Auth::id());

        $products = Product::limit(6)->orderBy('id','desc')->get();
        return view('main.base',compact('products','categories'));
    }

}
