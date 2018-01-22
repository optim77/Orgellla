<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function category(){
        $this->belongsTo('App\Category');
    }

    public function bought(){
        $this->belongsToMany('App\Bought');
    }

    public function user(){
        $this->belongsTo('App\User');
    }
}
