<?php include 'template/header.php'; ?>
<?php include 'template/nav.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-12 col-md-8">
            <?php

            $id = textFilter($_GET['id']);

            $list = getPost("id='$id'");

            if(count($list) <= 0){
                echo showError("info","မရှိပါဘူး ခင်ဗျာ");
            }

            foreach ($list as $p){

                ?>

                <div class="card mb-3">
                    <div class="card-body">
                        <h4 class="text-primary"><?php echo $p['title'] ?></h4>
                        <p>
                            <?php echo $p['description']; ?>
                        </p>
                        <div class="d-flex justify-content-between">
                            <a href="index.php">Read All</a>
                            <span>
                            <i class="fa fa-clock-o"></i>
                            <span class="text-faded"><?php echo date('d F Y',strtotime($p['created_at'])) ?></span>
                        </span>
                        </div>
                    </div>
                </div>

            <?php } ?>

        </div>
        <div class="col-12 col-md-4">
            <?php include "template/aside.php";?>
        </div>

    </div>
</div>


<?php include 'template/footer.php'; ?>


