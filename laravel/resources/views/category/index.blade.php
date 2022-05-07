@extends('template.master')
@section('main')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>分類管理</h2>
            <hr>
        </div>
        <div class="col-8">
            <h3>新增分類</h3>
            <form action="" method="POST">
                <div class="mb-3">
                    <label for="title" class="form-label">分類標題</label>
                    <input type="text" class="form-control" name="title" id="title">
                </div>
                <div class="mb-3">
                    <label for="slug" class="form-label">分類英文標題</label>
                    <input type="text" class="form-control" name="slug" id="slug">
                </div>
                <input type="submit" class="btn btn-primary" value="新增">
            </form>
        </div>
    </div>
</div>
@endsection
