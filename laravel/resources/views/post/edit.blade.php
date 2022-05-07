@extends('template.master')
@section('page-title')
    - 編輯文章
@endsection
@section('main')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h2>編輯文章</h2>
            <form action="{{route('post.update',['post'=>$post->id])}}" method="post">
                @csrf
                @method('put')
                <div class="mb-3">
                    <label for="" class="form-label">標題</label>
                    <input type="text" name='title' class="form-control" value="{{$post->title}}">
                </div>
                <div class="mb-3">
                    <label for="category_id" class="form-label">文章分類</label>
                    <select name="category_id" id="category_id" class="form-control">
                        @foreach($categories as $category)
                        <option value="{{$category->id}}"
                            {{ $category->id == $post->category_id ? 'selected':'' }}
                            >{{$category->title}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">內文</label>
                    <textarea name="content" id="content" cols="30" rows="10" class="form-control">{{$post->content}}</textarea>
                </div>
                <input type="submit" value="儲存" class="btn btn-primary">
                <input type="button" value="取消" onclick="history.back()" class="btn btn-outline-danger">
            </form>
        </div>
    </div>
</div>
@include('template.tinymce');

@endsection
