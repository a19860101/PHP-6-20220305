@extends('template.master')
@section('page-title')
    - 首頁
@endsection
@section('main')
    <div class="container">
        <div class="row">
            <div class="col-9">
                @foreach ($posts as $post)
                    <div class="row mb-3">
                        <div class="col-6 overflow-hidden" style="height:320px">
                            @if ($post->cover != null)
                                <img src="{{ asset('storage/images/' . $post->cover) }}" class="w-100 h-100"
                                    style="object-fit: cover;object-position: center">
                            @else
                                <img src="https://picsum.photos/id/119/800/600" class="w-100 h-100"
                                    style="object-fit: cover;object-position: center">
                            @endif
                        </div>
                        <div class="col-6 d-flex flex-column justify-content-between">
                            <div class="mt-2">
                                <h3>{{ Str::limit($post->title, 60) }}</h3>
                                <small class="badge bg-secondary">{{ $post->category->title }}</small>
                                <div class="my-3">{{ Str::limit(strip_tags($post->content), 100) }}</div>
                                <a href="{{ route('post.show', ['post' => $post->id]) }}"
                                    class="btn btn-outline-primary btn-sm">繼續閱讀</a>
                            </div>
                            <?php
                            Carbon\Carbon::setLocale('zh_TW');
                            ?>
                            <div class="mb-2 text-secondary">
                                {{-- {{Carbon\Carbon::parse($post->created_at)->toDateString()}} --}}
                                {{ Carbon\Carbon::parse($post->created_at)->diffForHumans() }} by JohnDoe
                                {{-- {{$post->created_at}} by JohnDoe --}}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="col-3">
                <div class="border p-3 rounded-3 mb-5">
                    <h2 class="bg-primary text-light p-2 fs-4 mb-4 rounded-2">分類</h2>
                    <ul class="list-group">
                        @foreach ($categories as $category)
                            <li class="list-group-item">
                                <a href="{{ route('post.show', ['post' => $category->id]) }}"
                                    class="text-secondary text-decoration-none">
                                    {{ $category->title }}</h3>
                                </a>
                            </li>
                        @endforeach
                    </ul>

                </div>
                <div class="border p-3 rounded-3">
                    <h2 class="bg-primary text-light p-2 fs-4 mb-4 rounded-2">最新文章</h2>
                    @foreach ($newPosts as $newPost)
                        <div class="mb-4 border p-3 rounded-2">
                            <h3 class="fs-6">
                                <a href="{{ route('post.show', ['post' => $newPost->id]) }}"
                                    class="text-secondary text-decoration-none">
                                    {{ $newPost->title }}
                            </h3>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
