<?php
    $imgs = glob('images/*');
    var_dump($imgs);
?>
<?php include('../template/header.php'); ?>
<div class="container">
    <div class="row g-3">
        <?php foreach($imgs as $img) { ?>
        <div class="col-3">
            <div>
                <img src="<?php echo $img; ?>" class="w-100">
                <form action="">
                    <input type="submit" class="btn btn-danger btn-sm" value="刪除">
                </form>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
<?php include('../template/footer.php'); ?>