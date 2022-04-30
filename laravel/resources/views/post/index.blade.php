@extends('template.master')
@section('page-title')
- 首頁
@endsection
@section('main')
<div class="container">
    <div class="row">
        <div class="col-9">
            @foreach($posts as $post)
            <div class="row mb-3">
                <div class="col-6">
                    <img src="https://picsum.photos/id/11/800/600" class="w-100">
                </div>
                <div class="col-6 d-flex flex-column justify-content-between">
                    <div class="mt-2">
                        <h3>{{$post->title}}</h3>
                        <div>{{$post->content}}</div>
                        <a href="{{route('post.show',['post'=>$post->id])}}" class="btn btn-outline-primary btn-sm">繼續閱讀</a>
                    </div>
                    <div class="mb-2 text-secondary">
                        {{$post->created_at}} by JohnDoe
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="col-3">
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
