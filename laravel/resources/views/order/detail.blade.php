@extends('template.master')

@section('main')
<div class="container">
    <div class="row">
        @foreach($order_details as $od)
        <div class="col-12">
            {{$od->product_id}}
            {{$od->product->title}}
        </div>
        @endforeach
    </div>
</div>
@endsection
