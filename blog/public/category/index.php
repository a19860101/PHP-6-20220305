<?php
    include('../../vendor/autoload.php');
    use Gjun\Blog\Controller\Category;

    $categories = Category::index();
?>
<?php include('../template/header.php'); ?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>分類管理</h2>
        </div>
        <div class="col-9"></div>
        <div class="col-3">
            <h3>所有分類</h3>
            <ul class="list-group">
                <?php foreach($categories as $category){ ?>
                <li class="list-group-item"><?php echo $category['title']; ?></li>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>
<?php include('../template/footer.php'); ?>