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
                <div class="col-6 overflow-hidden" style="height:320px">
                    @if($post->cover != null)
                    <img src="{{asset('storage/images/'.$post->cover)}}" class="w-100 h-100"  style="object-fit: cover;object-position: center">
                    @else
                    <img src="https://picsum.photos/id/119/800/600" class="w-100 h-100"  style="object-fit: cover;object-position: center">
                    @endif
                </div>
                <div class="col-6 d-flex flex-column justify-content-between">
                    <div class="mt-2">
                        <h3>{{Str::limit($post->title,60)}}</h3>
                        <div class="my-3">{{ Str::limit(strip_tags($post->content),100) }}</div>
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
