<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use Auth;
use DB;

class CartController extends Controller
{
    //
    public function addToCart(Request $request){
        Cart::create([
            'product_id'    => $request->product_id,
            'user_id'       => Auth::id()
        ]);
        // $cart = new Cart;
        // $cart->product_id = $request->product_id;
        // $cart->user_id = Auth::id();
        // $cart->save();

        return redirect()->back();
    }
    public function cartList(){
        $carts = Cart::where('user_id',Auth::id())->get();
        $cartsUniq = collect($carts)->unique('product_id');
        // return $carts;

        $price = [];
        $productNum = $carts->countBy('product_id')->all();

        foreach($carts as $cart){
            if($cart->product->sale){
                $price[] = $cart->product->sale;
            }else{
                $price[] = $cart->product->price;
            }
        }
        $total = collect($price)->sum();
        return view('cart.list')->with([
            'carts' => $cartsUniq,
            'total' => $total,
            'productNum' => $productNum
        ]);
    }
    public function deleteCartItem(Cart $cart){
        $cart->delete();
        return redirect()->back();
    }
    public function removeCart(){
        $carts = Cart::where('user_id',Auth::id())->get();
        foreach($carts as $cart){
            $cart->delete();
        }
        return redirect()->back();
    }
}
