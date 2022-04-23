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
        <a href="/post">文章列表</a>
        <a href="/post/create">新增文章</a>
    </nav>
    <h1>新增文章</h1>
    <form action="/post" method="post">
        @csrf
        <div>
            <label for="">標題</label>
            <input type="text" name='title'>
        </div>
        <div>
            <label for="">內文</label>
            <textarea name="content" id="" cols="30" rows="10"></textarea>
        </div>
        <input type="submit" value="新增文章">
    </form>
</body>
</html>
