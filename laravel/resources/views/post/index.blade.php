@extends('template.master')
@section('page-title')
- 首頁
@endsection
@section('main')
<div class="container">
    <div class="row">
        <div class="col-8">
            @foreach($posts as $post)
            <div>
                <div>
                    <img src="https://picsum.photos/id/11/800/400" alt="">
                </div>
                <div>
                    <h3>{{$post->title}}</h3>
                    <div>{{$post->content}}</div>
                    <a href="{{route('post.show',['post'=>$post->id])}}">繼續閱讀</a>
                </div>
                <div>
                    {{$post->created_at}} JohnDoe
                </div>
            </div>
            @endforeach
        </div>
        <div class="col-4">
            <div>
                <h2>分類</h2>
            </div>
            <div>
                <h2>最新文章</h2>
            </div>
        </div>
    </div>
</div>
@endsection
