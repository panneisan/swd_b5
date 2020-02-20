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
                    <h4 class="text-primary" onclick="location.href=`post_detail.php?id=<?php echo $p['id']; ?>`"><?php echo $p['title'] ?></h4>
                    <p>
                        <?php echo shortText($p['description'],300); ?>
                        <a href="post_detail.php?id=<?php echo $p['id']; ?>">[ Read More ]</a>

                    </p>
                    <div class="d-flex justify-content-between align-items-center">
                        <a
                            href="like.php?id=<?php echo $p['id']; ?>"
                           class="btn btn-outline-primary"
                            <?php echo likeCount($p['id']) > 0 ? 'data-toggle="tooltip" data-placement="bottom" title="'.likeInfo($p['id']).'"':""; ?>
                        >
                            <i class="fa fa-heart-o"></i>
                            <?php echo isLiked($p['id'],authCheck()?$_SESSION['user']['id']:0) ? "unlike":"like"; ?> <?php echo likeCount($p['id']); ?>
                        </a>
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

<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>


