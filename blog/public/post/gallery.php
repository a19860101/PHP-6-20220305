<?php
    $imgs = glob('images/*');

    if(isset($_REQUEST['del'])){
        unlink($_REQUEST['img']);
        header('location:gallery.php');
    }
?>
<?php include('../template/header.php'); ?>
<div class="container">
    <div class="row g-3">
        <?php foreach($imgs as $img) { ?>
        <div class="col-3">
            <div>
                <img src="<?php echo $img; ?>" class="w-100">
                <form action="" method="post">
                    <input type="hidden" name="img" value="<?php echo $img; ?>">
                    <input type="submit" class="btn btn-danger btn-sm" value="刪除" name="del">
                </form>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
<?php include('../template/footer.php'); ?>