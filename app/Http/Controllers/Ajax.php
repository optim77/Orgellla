<?php

namespace App\Http\Controllers;

use App\Basket;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Ajax extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function addToBasket(Request $request){
        $product = $_POST['val'];
        $user = Auth::id();
        $basket = new Basket();
        $basket->user_id = $user;
        $basket->product_id = $product;
        $basket->complete = 1;
        $basket->save();
        $response = array('code' => 100, 'success' => true);
        return new JsonResponse($response);
    }

    public function deleteFromBasket(Request $request){
        $user = Auth::id();
        $id = $_POST['val'];
        $item = Basket::find($id);
        $item->complete = 0;
        $item->save();
        $response = array('code' => 100, 'success' => true);
        return new JsonResponse($response);

    }

}
