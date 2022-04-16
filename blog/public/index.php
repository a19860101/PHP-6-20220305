<?php
    include('../vendor/autoload.php');
    use Gjun\Blog\Controller\Post;
    $posts = Post::index();
?>
<?php include('template/header.php'); ?>
<div class="container">
    <div class="row g-3">
        <div class="col-12">
            <h2>所有文章</h2>
            <hr>
        </div>
        <?php foreach($posts as $post){ ?>
        <div class="col-8">
            <div class="border p-3 rounded-3">
                <h3 class="mb-3"><?php echo $post['title'];?></h3>
                <div>
                    <?php echo mb_substr($post['content'],0,100); ?>...
                </div>
                <div class="my-3">
                    <a href="post/show.php?id=<?php echo $post['id'];?>" class="btn btn-primary btn-sm">繼續閱讀</a>
                </div>
                <div class="mt-3">
                    <?php echo $post['updated_at']; ?>
                </div>
                
            </div>
        </div>
        <?php } ?>
    </div>
</div>
<?php include('template/footer.php'); ?>

