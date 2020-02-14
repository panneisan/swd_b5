<?php include 'template/header.php'; ?>
<?php include 'template/nav.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-12 col-md-8">
            <?php foreach (getPost() as $p){ ?>

            <div class="card mb-3">
                <div class="card-body">
                    <h4 class="text-primary"><?php echo $p['title'] ?></h4>
                    <p>
                        <?php echo shortText($p['description'],300); ?>
                    </p>
                    <div class="d-flex justify-content-between">
                        <a href="">Read More</a>
                        <span>
                            <i class="fa fa-clock-o"></i>
                            <span class="text-faded"><?php echo date('d F Y',strtotime($p['created_at'])) ?></span>
                        </span>
                    </div>
                </div>
            </div>

            <?php } ?>
        </div>
        <div class="col-12 col-md-4"></div>
    </div>
</div>


<?php include 'template/footer.php'; ?>


