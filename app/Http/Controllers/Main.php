<?php

namespace App\Http\Controllers;

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
        return view('main.base');
    }

    public function profile(){
        $id = Auth::id();
        $data = User::find($id);

        return view('main.profile')->with('data',$data);
    }
}
