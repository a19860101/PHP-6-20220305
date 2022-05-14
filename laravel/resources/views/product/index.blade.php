@extends('template.master')

@section('main')
<div class="container">
    <div class="row">
        <div class="col-8">
            <table class="table">
                <tr>
                    <th>商品編號</th>
                    <th>商品名稱</th>
                    <th>價格</th>
                    <th>特價</th>
                    <th>上架</th>
                    <th>下架</th>
                    <th>管理</th>
                </tr>
            </table>
        </div>
        <div class="col-4">
            <ul class="list-group">
                <li class="list-group-item">
                    <a href="{{route('product.create')}}" class="btn btn-primary btn-sm">新增商品</a>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection
