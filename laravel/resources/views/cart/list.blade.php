@extends('template.master')

@section('main')
<div class="container py-5">
    <div class="row gy-4">
        <div class="col-12">
            <h2>購物車列表</h2>
        </div>
        @foreach($carts as $cart)
        <div class="col-12">
            <div class="border p-3 rounded-3 d-flex">
                <img src="{{asset('storage/images/'.$cart->product->cover)}}" width="200">
                <div class="ms-4 d-flex flex-column">
                    <h3>{{$cart->product->title}}</h3>
                    <div class="mt-auto">
                        @if($cart->product->sale)
                        <del class="text-secondary">原價 {{$cart->product->price}}</del>
                        <span class="text-danger fw-bold">特價 {{$cart->product->sale}}</span>
                        @else
                        <span>原價 {{$cart->product->price}}</span>
                        @endif
                    </div>
                </div>
                <div class="ms-auto align-self-end">
                    <form action="{{route('deleteCartItem',['cart'=>$cart->id])}}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" value="刪除" class="btn btn-danger btn-sm">
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
