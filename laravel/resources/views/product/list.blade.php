@extends('template.master')

@section('main')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>
                所有商品
            </h2>
        </div>
        @foreach($products as $product)
        <div class="col-3">
            <div class="border rounded-3 overflow-hidden">
                <a href="{{route('product.detail',['id' => $product->id])}}">
                    <img src="{{asset('storage/images/'.$product->cover)}}" class="w-100">
                </a>
                <hr>
                <div class="p-3">
                    <h3 class="fs-5 mb-4">{{$product->title}}</h3>
                    <div class="mb-4">
                        @if($product->sale)
                        <del class="text-secondary">原價 {{$product->price}}</del>
                        <span class="text-danger fw-bold">特價 {{$product->sale}}</span>
                        @else
                        <span>原價 {{$product->price}}</span>
                        @endif
                    </div>
                    {{-- <a href="#" class="btn btn-sm btn-primary">加入購物車</a> --}}
                    <form action="{{route('addToCart')}}" method="post">
                        @csrf
                        <input type="submit" value="加入購物車" class="btn btn-sm btn-primary">
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
