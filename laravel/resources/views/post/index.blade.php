<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <nav>
        <a href="{{route('post.index')}}">文章列表</a>
        <a href="{{route('post.create')}}">新增文章</a>
    </nav>
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
</body>
</html>
