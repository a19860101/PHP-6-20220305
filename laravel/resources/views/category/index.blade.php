@extends('template.master')
@section('main')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>分類管理</h2>
            <hr>
        </div>
        <div class="col-8">
            <h3>新增分類</h3>
            <form action="{{route('category.store')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">分類標題</label>
                    <input type="text" class="form-control" name="title" id="title">
                </div>
                <div class="mb-3">
                    <label for="slug" class="form-label">分類英文標題</label>
                    <input type="text" class="form-control" name="slug" id="slug">
                </div>
                <input type="submit" class="btn btn-primary" value="新增">
            </form>
        </div>
        <div class="col-4">
            <h3>所有分類</h3>
            <ul class="list-group">
                @foreach($categories as $category)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{$category->title}}
                    <form action="{{route('category.destroy',['category'=>$category->id])}}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" value="刪除" class="btn btn-danger btn-sm" onclick="return confirm('確認刪除？')">
                    </form>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection
