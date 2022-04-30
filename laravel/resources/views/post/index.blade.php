@extends('template.master')
@section('page-title')
- 首頁
@endsection
@section('main')
<h1>文章列表</h1>
@foreach($posts as $post)
<div>
    <h2>{{$post->title}}</h2>
    <small>{{$post->created_at}}</small>
    <div>
        {{$post->content}}
    </div>
    <div>
        <a href="{{route('post.show',['post'=>$post->id])}}">繼續閱讀</a>
    </div>
</div>
@endforeach
@endsection
