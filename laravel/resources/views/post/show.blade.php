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
</body>
</html>
