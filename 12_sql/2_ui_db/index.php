<?php include 'template/header.php'; ?>
<?php include 'template/nav.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-12 col-md-8">
            <?php

            $list = getPost();

            if(@$_GET['category']){
                $categoryID = textFilter($_GET['category']);
                $list = getPost("category_id = $categoryID");
            }

            if(isset($_POST['search'])){
                $key = textFilter($_POST['key']);
                $list = getPost("title LIKE '%$key%' || description LIKE '%$key%'");
            }

            if(count($list) <= 0){
                echo showError("info","မရှိပါဘူး ခင်ဗျာ");
            }

            foreach ($list as $p){

                ?>

            <div class="card mb-3">
                <div class="card-body">
                    <h4 class="text-primary"><?php echo $p['title'] ?></h4>
                    <p>
                        <?php echo shortText($p['description'],300); ?>
                    </p>
                    <div class="d-flex justify-content-between">
                        <a href="post_detail.php?id=<?php echo $p['id']; ?>">Read More</a>
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


