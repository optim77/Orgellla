<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class AdminPanel extends Controller
{
    public function getCategories(){
        echo 1;
        $categories = Category::all();
        return view('admin.categories',['categories' => $categories]);
    }

    public function editCategory($id){

        $category = Category::find($id);

        return view('admin.categoryAction',['category' => $category]);

    }

    public function insertCategory(){

    }

    public function destroy($id){

        Category::destroy($id);

        return redirect(route('categoriesAdmin'));

    }
}
