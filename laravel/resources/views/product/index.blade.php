@extends('template.master')

@section('main')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h3>商品列表</h3>
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
                @foreach($products as $p)
                <tr>
                    <td>{{$p->id}}</td>
                    <td>{{$p->title}}</td>
                    <td>{{$p->price}}</td>
                    <td>{{$p->sale}}</td>
                    <td>{{$p->started_at}}</td>
                    <td>{{$p->ended_at}}</td>
                    <td>
                        <a href="{{route('product.edit',['product' => $p->id])}}" class="btn btn-outline-success btn-sm">編輯</a>
                        <form action="{{route('product.destroy',['product' => $p->id])}}" method="post" class="d-inline-block">
                            @csrf
                            @method('delete')
                            <input type="submit" value="刪除" class="btn btn-danger btn-sm">
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
            <div class="w-100 p-4 my-3" style="background-color:#e8e8e8"></div>
            <h3>已刪除</h3>
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
                @foreach($trashes as $t)
                <tr>
                    <td>{{$t->id}}</td>
                    <td>{{$t->title}}</td>
                    <td>{{$t->price}}</td>
                    <td>{{$t->sale}}</td>
                    <td>{{$t->started_at}}</td>
                    <td>{{$t->ended_at}}</td>
                    <td>
                        <a href="{{route('product.restore',['product'=>$t->id])}}" class="btn btn-info btn-sm">還原</a>
                        <form action="" method="post" class="d-inline-block">
                            @csrf
                            @method('delete')
                            <input type="submit" value="永久刪除" class="btn btn-danger btn-sm">
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
        <div class="col-2">
            <ul class="list-group">
                <li class="list-group-item">
                    <a href="{{route('product.create')}}" class="btn btn-primary btn-sm">新增商品</a>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection
