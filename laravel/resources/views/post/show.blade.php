@extends('template.master')
@section('page-title')
    - {{ $post->title }}
@endsection
@section('main')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="overflow-hidden mb-3" style="height:300px;">
                    <img src="https://picsum.photos/id/11/800/600" class="w-100 h-100" style="object-fit: cover;object-position: center">
                </div>
                <h2>{{ $post->title }}</h2>
                <small class="text-secondary">{{ $post->created_at }} by JohnDoe</small>
                <hr>
                <div>
                    {{ $post->content }}
                </div>
                <hr>
                <div>
                    <a href="{{ route('post.edit', ['post' => $post->id]) }}" class="btn btn-success btn-sm">編輯文章</a>
                    <form action="{{ route('post.destroy', ['post' => $post->id]) }}" method="post" class="d-inline-block">
                        @csrf
                        @method('delete')
                        <input type="submit" value="刪除文章" onclick="return confirm('確認刪除')" class="btn btn-danger btn-sm">
                    </form>
                    <a href="#" class="btn btn-primary btn-sm" onclick="history.back()">回上頁</a>
                </div>
            </div>
        </div>
    </div>


@endsection
