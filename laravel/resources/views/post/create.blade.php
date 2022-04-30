@extends('template.master')
@section('page-title')
    - 新增文章
@endsection
@section('main')
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
@endsection
