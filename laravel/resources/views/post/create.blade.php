@extends('template.master')
@section('page-title')
    - 新增文章
@endsection
@section('main')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h2>新增文章</h2>
            <form action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label">標題</label>
                    <input type="text" name='title' class="form-control">
                </div>
                <div class="mb-3">
                    <label for="category_id" class="form-label">文章分類</label>
                    <select name="category_id" id="category_id" class="form-control">
                        @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->title}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">封面圖片</label>
                    <input type="file" name="cover" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">內文</label>
                    <textarea name="content" id="content" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <input type="submit" value="新增文章" class="btn btn-primary">
            </form>
        </div>
    </div>
</div>
@include('template.tinymce');
@endsection
