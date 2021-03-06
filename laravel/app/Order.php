<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $fillable = ['orderId','user_id'];

    public function orderDetails(){
        return $this->hasMany('App\OrderDetail');
    }
}
