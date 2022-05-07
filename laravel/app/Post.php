<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = ['title','content','category_id'];

    function category(){
        return $this->belongsTo('App\Category');
    }
    function tags(){
        return $this->belongsToMany('App\Tag');
    }
}
