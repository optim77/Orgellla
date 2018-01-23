<?php

namespace App\Http\Controllers;

use App\Bought;
use App\Category;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class Profile extends Controller
{

    public function __construct()
    {
    }

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
        return view('profile.bought')->with('data',$data);
    }

    public function create(){
        $categories = Category::pluck('name','id');
        return view('profile.create')->with('categories',$categories);
    }

    public function createAction(Request $request){
        $id = Auth::id();
        $data = User::find($id);
        $plain = sha1(uniqid(null,true));
        print_r($request->all());
        $product = new Product($request->all());
        $product->slug = $plain;
        $product->user_id = $id;
        print_r($request->file('photo1')->getClientSize());

        if(Input::hasFile('photo1') && $request->file('photo1')->getClientSize() < 500000){

            $name = uniqid(null,true);
            $guessExtension = $request->file('photo1')->guessExtension();
            $product->photo1 = $name.'.'.$guessExtension;
            $file = $request->file('photo1')->move('upload/photos', $name.'.'.$guessExtension);
        }
        $product->save();
        return redirect('profile');
    }

}
