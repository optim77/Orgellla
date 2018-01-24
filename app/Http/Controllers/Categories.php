<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Categories extends Controller
{
    public function show($category){

        return view('categories.category');
    }
}
