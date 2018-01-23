<?php

namespace App\Http\Controllers;

use App\Bought;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Profile extends Controller
{
    public function show(){
        $id = Auth::id();
        $data = User::find($id);
        return view('profile.data')->with('data',$data);
    }

    public function edit(Request $request){
        $id = Auth::id();
        $data = User::find($id);
        $data->update($request->all());
        return view('profile.form')->with('data',$data);
    }

    public function editAction(Request $request){
        $id = Auth::id();
        $data = User::find($id);
        $data->update($request->all());
        return redirect('profile');
    }

    public function bought(){
        $id = Auth::id();
        $data = Bought::where('user_id',$id)->get();
        //$data = DB::table('boughts')->join('products','boughts.product_id','=','products.id')->where('user_id','=',$id)->get();
        return view('profile.bought')->with('data',$data);
    }
}
