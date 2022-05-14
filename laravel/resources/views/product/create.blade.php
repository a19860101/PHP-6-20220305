@extends('template.master')

@section('main')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h2>新增商品</h2>
                <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                    <div class="mb-3">
                        <label class="form-label" for="商品名稱">商品名稱</label>
                        <input class="form-control" id="商品名稱" type="text" name="title" placeholder="商品名稱" data-sb-validations="" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="商品封面">商品封面</label>
                        <input class="form-control" id="商品封面" type="file" name="cover" placeholder="商品封面" data-sb-validations="" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="商品敘述">商品敘述</label>
                        <textarea class="form-control" id="商品敘述" type="text"name="desc" placeholder="商品敘述" style="height: 10rem;"
                            data-sb-validations=""></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="價格">價格</label>
                        <input class="form-control" id="價格" type="text" name="price" placeholder="價格" data-sb-validations="" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="特價">特價</label>
                        <input class="form-control" id="特價" type="text" name="sale" placeholder="特價" data-sb-validations="" />
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="上架">上架</label>
                        <input class="form-control" id="上架" type="date" name="started_at" placeholder="上架" data-sb-validations="" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="下架">下架</label>
                        <input class="form-control" id="下架" type="date" name="ended_at" placeholder="下架" data-sb-validations="" />
                    </div>
                   <input type="submit" class="btn btn-primary" value="新增商品">

                </form>
            </div>
        </div>
    </div>
@endsection
