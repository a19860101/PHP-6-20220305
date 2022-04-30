@extends('template.master')
@section('page-title')
    - {{ $post->title }}
@endsection
@section('main')
    <?php
    Carbon\Carbon::setLocale('zh_TW');
    ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="overflow-hidden mb-3" style="height:400px;">
                    @if ($post->cover != null)
                        <img src="{{ asset('storage/images/' . $post->cover) }}" class="w-100 h-100"
                            style="object-fit: cover;object-position: center">
                    @else
                        <img src="https://picsum.photos/id/119/800/600" class="w-100 h-100"
                            style="object-fit: cover;object-position: center">
                    @endif
                </div>
                <h2>{{ $post->title }}</h2>
                <small class="text-secondary"> {{ Carbon\Carbon::parse($post->created_at)->diffForHumans() }} by JohnDoe
                </small>
                <hr>
                <div>
                    {!! $post->content !!}
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
