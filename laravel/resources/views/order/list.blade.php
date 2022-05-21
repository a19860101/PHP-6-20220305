@extends('template.master')

@section('main')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>訂單</h2>
        </div>
        @foreach ($orders as $order)
        <div class="col-12">
            <h3>
                訂單編號
                <a href="{{route('orderDetail',['id'=>$order->id])}}">
                    {{$order->orderId}}
                </a>
            </h3>
        </div>
        @endforeach
    </div>
</div>
@endsection
