<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
    //
    protected $fillable = ['title','desc','price','sale','started_at','ended_at'];

    public function carts(){
        return $this->hasMany('App\Cart');
    }
}
