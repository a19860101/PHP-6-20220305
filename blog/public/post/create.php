<?php include('../template/header.php'); ?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>建立文章</h2>
            <hr>
        </div>
        <div class="col-6">
            <form action="store.php" method="post">
                <div class="mb-3">
                    <label for="title" class="form-label">文章標題</label>
                    <input type="text" name="title" class="form-control" id="title">
                </div>
                <div class="mb-3">
                    <label for="category_id" class="form-label">文章分類</label>
                    <select name="category_id" id="category_id" class="form-select">
                        <option value="1">科技</option>
                        <option value="2">生活</option>
                        <option value="3">健康</option>
                        <option value="4">政治</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">文章內容</label>
                    <textarea name="content" id="content" rows="10" class="form-control"></textarea>
                </div>
                <input type="submit" class="btn btn-primary" value="建立文章">
            </form>
        </div>
    </div>
</div>

<?php include('../template/footer.php'); ?>
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector: '#content',
        language:'zh_TW'
    });
</script>