<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Cart;
use Str;
use Auth;
use DB;

class OrderController extends Controller
{
    //
    public function checkout(){
        $orderId = time();
        $order = Order::create([
            'orderId'   => $orderId,
            'user_id'   => Auth::id()
        ]);

        $carts = Cart::where('user_id',Auth::id())->get();
        foreach($carts as $cart){
            DB::table('order_details')->insert([
                'product_id'    => $cart->product->id,
                'order_id'      => $order->id
            ]);
        }
    }
}
