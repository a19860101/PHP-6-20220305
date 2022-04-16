<?php
    include('../../vendor/autoload.php');
    use Gjun\Blog\Controller\Post;
    $post = Post::edit($_REQUEST);
?>
<?php include('../template/header.php'); ?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>編輯文章</h2>
            <hr>
        </div>
        <div class="col-6">
            <form action="update.php" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="title" class="form-label">文章標題</label>
                    <input type="text" name="title" class="form-control" id="title" value="<?php echo $post['title'];?>">
                </div>
                <div class="mb-3">
                <label for="cover" class="form-label">文章封面</label>
                    <?php if($post['cover'] != null){ ?>
                    <img src="images/<?php echo $post['cover']; ?>" width="200">
                    <input type="hidden" name="cover" value="<?php echo $post['cover']; ?>">
                    <a href="#">刪除圖片</a>
                    <?php }else{ ?>
                    <input type="file" name="cover" class="form-control">
                    <?php } ?>
                </div>
                <div class="mb-3">
                    <label for="category_id" class="form-label">文章分類</label>
                    <select name="category_id" id="category_id" class="form-select">
                        <option value="1" <?php echo $post['category_id'] == 1 ? 'selected':'';?>>科技</option>
                        <option value="2" <?php echo $post['category_id'] == 2 ? 'selected':'';?>>生活</option>
                        <option value="3" <?php echo $post['category_id'] == 3 ? 'selected':'';?>>健康</option>
                        <option value="4" <?php echo $post['category_id'] == 4 ? 'selected':'';?>>政治</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">文章內容</label>
                    <textarea name="content" id="content" rows="10" class="form-control"><?php echo $post['content'];?></textarea>
                </div>
                <input type="hidden" value="<?php echo $post['id'];?>" name="id">
                <input type="submit" class="btn btn-primary" value="儲存文章">
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