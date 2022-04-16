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
            </div>
        </div>
    </div>
</div>
<?php include('../template/footer.php'); ?>
