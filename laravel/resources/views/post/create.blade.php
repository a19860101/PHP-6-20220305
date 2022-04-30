@extends('template.master')
@section('page-title')
    - 新增文章
@endsection
@section('main')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h2>新增文章</h2>
            <form action="/post" method="post">
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label">標題</label>
                    <input type="text" name='title' class="form-control">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">內文</label>
                    <textarea name="content" id="" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <input type="submit" value="新增文章" class="btn btn-primary">
            </form>
        </div>
    </div>
</div>
@endsection
