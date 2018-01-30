<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class Admin extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.edit',['product'=>\App\Product::where('slug',$id)->get(),'categories' => Category::pluck('name','id'),'slug' => $id]);
    }


    public function updateProduct(Request $request, $id)
    {
        $product = \App\Product::where('slug',$id);
        $product->update(['name' => $request->name]);
        $product->update(['description' => $request->description]);
        $product->update(['category_id' => $request->category_id]);
        $product->update(['price' => $request->price]);
        $product->update(['amount' => $request->amount]);



        return redirect(route('showSlug',$id));
    }


    public function deletePhoto($photo,$slug,$name){

        $product = \App\Product::where('slug',$slug);

        unlink(__DIR__.'/../../../public/upload/photos/'.$photo);

        $product->$name = null;

        return redirect(route('adminEditProduct',$slug));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = \App\Product::where('slug',$id)->delete();

        return redirect(route('mainIndex'));

    }
}
