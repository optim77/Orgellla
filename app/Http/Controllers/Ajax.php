<?php

namespace App\Http\Controllers;

use App\Basket;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Ajax extends Controller
{
    public function addToBasket($idProduct){
        $product = $_POST['val'];
        $user = Auth::id();
        $basket = new Basket();
        $basket->user_id = $user;
        $basket->product_id = $product;
        $basket->save();
        $response = array('code' => 100, 'success' => true);

        return new JsonResponse($response);

    }
}
