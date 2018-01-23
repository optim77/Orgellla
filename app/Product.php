<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function category(){
        $this->belongsTo('App\Category');
    }

    public function bought(){
       return $this->hasMany('App\Bought');
    }

    public function user(){
        $this->belongsTo('App\User');
    }
}
