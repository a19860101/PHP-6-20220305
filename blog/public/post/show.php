<?php
    include('../../vendor/autoload.php');
    use Gjun\Blog\Controller\Post;
    $post = Post::show($_REQUEST);
?>
<?php include('../template/header.php'); ?>
<div class="container">
    <div class="row">
        <div class="col-6">
            <h2 class="mb-3"><?php echo $post['title']; ?></h2>
            <div>
                <?php echo $post['content']; ?>
            </div>
            <div class="mt-3">
                <a href="<?php echo $webroot?>" class="btn btn-info">返回</a>
                <a href="edit.php?id=<?php echo $post['id'];?>" class="btn btn-success">編輯</a>
                <form action="delete.php" method="post" class="d-inline-block">
                    <input type="hidden" value="<?php echo $post['id']; ?>" name="id">
                    <input type="submit" class="btn btn-danger" value="刪除" onclick="return confirm('確認刪除？')">
                </form>
            </div>
        </div>
    </div>
</div>
<?php include('../template/footer.php'); ?>
