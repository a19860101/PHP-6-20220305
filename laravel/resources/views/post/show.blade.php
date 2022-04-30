@extends('template.master')
@section('page-title')
- {{$post->title}}
@endsection
@section('main')
<div>
    <h1>{{$post->title}}</h1>
    <div>
        {{$post->content}}
    </div>
</div>
<div>
    <a href="{{route('post.edit',['post'=>$post->id])}}">編輯文章</a>
    <form action="{{route('post.destroy',['post'=>$post->id])}}" method="post">
        @csrf
        @method('delete')
        <input type="submit" value="刪除文章" onclick="return confirm('確認刪除')">
    </form>
</div>
@endsection
