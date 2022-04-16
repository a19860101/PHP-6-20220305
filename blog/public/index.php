<?php
    include('../vendor/autoload.php');
    use Gjun\Blog\Controller\Post;
    $posts = Post::index();
?>
<?php include('template/header.php'); ?>
<div class="container">
    <div class="row gy-4">
        <div class="col-12">
            <h2>所有文章</h2>
            <hr>
        </div>
        <?php foreach($posts as $post){ ?>
        <div class="col-10">
            <div class="border p-3 rounded-3 d-flex">
                <div class="col-3 bg-secondary">
                    <?php if($post['cover'] != null){ ?>
                    <img src="post/images/<?php echo $post['cover'];?>" class="w-100 h-100" style="object-fit:cover;">
                    <?php }else{ ?>
                    <img src="https://picsum.photos/id/123/800" class="w-100 h-100"  style="object-fit:cover;">
                    <?php } ?>
                </div>
                <div class="col-9 ps-4">
                    <h3 class="mb-3"><?php echo $post['title'];?></h3>
                    <div>
                        <?php 
                            $content = strip_tags($post['content']);
                            echo mb_substr($content,0,100); 
                            
                        ?>...
                    </div>
                    <div class="my-3">
                        <a href="post/show.php?id=<?php echo $post['id'];?>" class="btn btn-primary btn-sm">繼續閱讀</a>
                    </div>
                    <div class="mt-3">
                        <?php echo $post['updated_at']; ?>
                    </div>
                </div>

            </div>
        </div>
        <?php } ?>
    </div>
</div>
<?php include('template/footer.php'); ?>

