@extends('template.master')

@section('main')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>購物車列表</h2>
        </div>
        @foreach($carts as $cart)
        <div class="col-12">
            <div>
                <h3>{{$cart->product_id}}</h3>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
