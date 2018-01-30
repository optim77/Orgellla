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

//        print_r($request->file('photo1'));
//        print_r($request->photo1);
//
//
//        exit();

        $product->start = new \DateTime();


//        if($request->photo1 && $request->file('photo1')->getClientSize() < 500000){
//            $name = uniqid(null,true);
//            $guessExtension = $request->file('photo1')->guessExtension();
//            $photo1 = $name.'.'.$guessExtension;
//            $file = $request->file('photo1')->move('upload/photos', $name.'.'.$guessExtension);
//        }
//
//
//        if($request->photo1 && $request->file('photo2')->getClientSize() < 500000){
//
//            $name = uniqid(null,true);
//            $guessExtension = $request->file('photo2')->guessExtension();
//            $photo2 = $name.'.'.$guessExtension;
//            $file = $request->file('photo2')->move('upload/photos', $name.'.'.$guessExtension);
//        }
//
//
//
//        if($request->photo2 && $request->file('photo3')->getClientSize() < 500000){
//
//            $name = uniqid(null,true);
//            $guessExtension = $request->file('photo3')->guessExtension();
//            $photo3 = $name.'.'.$guessExtension;
//            $file = $request->file('photo3')->move('upload/photos', $name.'.'.$guessExtension);
//        }
//
//
//
//        if($request->photo3 && $request->file('photo3')->getClientSize() < 500000){
//
//            $name = uniqid(null,true);
//            $guessExtension = $request->file('photo3')->guessExtension();
//            $photo3 = $name.'.'.$guessExtension;
//            $file = $request->file('photo3')->move('upload/photos', $name.'.'.$guessExtension);
//        }
//
//
//
//        if($request->photo4 && $request->file('photo4')->getClientSize() < 500000){
//
//            $name = uniqid(null,true);
//            $guessExtension = $request->file('photo4')->guessExtension();
//            $photo4 = $name.'.'.$guessExtension;
//            $file = $request->file('photo4')->move('upload/photos', $name.'.'.$guessExtension);
//        }
//
//
//        if($request->photo5 && $request->file('photo5')->getClientSize() < 500000){
//
//            $name = uniqid(null,true);
//            $guessExtension = $request->file('photo5')->guessExtension();
//            $photo5 = $name.'.'.$guessExtension;
//            $file = $request->file('photo5')->move('upload/photos', $name.'.'.$guessExtension);
//        }
//
//
//        if($request->photo6 && $request->file('photo6')->getClientSize() < 500000){
//
//            $name = uniqid(null,true);
//            $guessExtension = $request->file('photo3')->guessExtension();
//            $photo6 = $name.'.'.$guessExtension;
//            $file = $request->file('photo6')->move('upload/photos', $name.'.'.$guessExtension);
//        }
//
//
//        $product->update(['photo1' => isset($photo1) ? $photo1 : null]);
//        $product->update(['photo1' => isset($photo2) ? $photo2 : null]);
//        $product->update(['photo3' => isset($photo3) ? $photo3 : null]);
//        $product->update(['photo4' => isset($photo4) ? $photo4 : null]);
//        $product->update(['photo5' => isset($photo5) ? $photo5 : null]);
//        $product->update(['photo6' => isset($photo6) ? $photo6 : null]);

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
