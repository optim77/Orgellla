<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bought extends Model
{
    public function product(){
        $this->hasMany('App\Product');
    }

    public function user(){
        $this->hasMany('App\User');
    }
}
