<?php include 'template/header.php'; ?>
<?php include 'template/nav.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <?php
            $id = textFilter($_GET['id']);
            $s=software($id);
            ?>

                <div class="card mb-3">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <h4 class="text-primary mr-2">
                                <?php echo $s['title'] ?>
                            </h4>
                            <h6>
                                <span class="badge badge-sm badge-dark">
                                US <i class="fa fa-usd"></i> 100
                                </span>
                            </h6>
                        </div>
                        <p class="text-justify ">
                            <?php echo $s['description']; ?>
                        </p>
                        <div class="d-flex justify-content-between">
                            <a href="software_center.php?>">Read All</a>
                            <span class="text-faded"><?php echo date("d F Y",strtotime($s['created_at']))?></span>
                        </div>
                    </div>
                </div>


        </div>

    </div>
</div>


<?php include 'template/footer.php'; ?>


