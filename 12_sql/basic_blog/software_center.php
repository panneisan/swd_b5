<?php include 'template/header.php'; ?>
<?php include 'template/nav.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-12 ">
            <div class="card-columns">


            <?php

            $list = getSoftware("status = '1'");

            foreach ($list as $s){

                ?>

                <div class="card mb-3">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <h4 class="text-primary mr-2">
                                <?php echo $s['title'] ?>
                            </h4>
                            <h6>
                                <span class="badge badge-pill badge-sm badge-dark">
                                US <i class="fa fa-usd"></i> <?php echo $s['price'];?>
                                </span>
                            </h6>
                        </div>
                        <p class="text-justify">
                            <?php echo shortText($s['description'],300); ?>
                        </p>
                        <div class="d-flex justify-content-between">
                            <a href="software_detail.php?id=<?php echo $s['id']; ?>">Read More</a>
                            <span>
                            <i class="fa fa-clock-o"></i>
                            <span class="text-faded"><?php echo date('d F Y',strtotime($s['created_at'])) ?></span>
                        </span>
                        </div>
                    </div>
                </div>

            <?php } ?>

            </div>

        </div>
    </div>
</div>


<?php include 'template/footer.php'; ?>


