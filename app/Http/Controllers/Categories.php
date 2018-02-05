<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Categories extends Controller
{
    public function show($category){

        $category = Category::where('slug',$category)->get();
        //$category = DB::table('categories')->where('slug',$category)->get();
        foreach ($category as $c){
            $id = $c->id;
        }


        $products = \App\Product::where('category_id',$id)->paginate(15);

        return view('categories.category',['products' => $products]);
    }


    public function whole(){

        return view('categories.whole',['categories' => Category::all()]);

    }
}
