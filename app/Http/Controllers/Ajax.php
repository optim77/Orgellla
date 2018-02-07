<?php

namespace App\Http\Controllers;

use App\Basket;
use App\User;
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

    public function switchLocation(Request $request){
        $id = Auth::id();
        $user = User::find($id);
        print_r($user->id);
        if($user->blocked == null || $user->blocked == 0){
            User::where('id',$id)->update(['blocked' => 1]);

        }else{
            User::where('id',$id)->update(['blocked' => 0]);
        }
        $response = array('code' => 100, 'success' => true);
        return new JsonResponse($response);
    }

}
