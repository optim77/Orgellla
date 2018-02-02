<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'description', 'category', 'price', 'amount','category_id', 'start'
    ];

    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function bought(){
       return $this->hasMany('App\Bought');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function convs(){
        return $this->hasMany('App\Conv');
    }
}
