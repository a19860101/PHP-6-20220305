@extends('template.master')

@section('main')
<div class="container">
    <div class="row">
        <div class="col-6">
            <img src="{{asset('storage/images/'.$product->cover)}}" alt="" class="w-100 border">
        </div>
        <div class="col-6 d-flex flex-column">
            <h2>{{$product->title}}</h2>
            <div class="my-3">
                {{$product->desc}}
            </div>
            <div class="mb-4 mt-auto fs-2 fw-bold">
                @if($product->sale)
                <del class="text-secondary">原價 {{$product->price}}</del>
                <span class="text-danger fw-bold">特價 {{$product->sale}}</span>
                @else
                <span>原價 {{$product->price}}</span>
                @endif
            </div>
            <a href="#" class="btn btn-sm btn-primary">加入購物車</a>

        </div>
    </div>
</div>
@endsection
