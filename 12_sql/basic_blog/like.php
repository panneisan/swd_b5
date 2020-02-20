<?php include 'template/header.php'; ?>
<?php include 'template/nav.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-12">

            <?php

                if(!authCheck()){

                    echo "like လုပ်ဖို့ Register အရင်လုပ်ပေးပါ";

                }else{
                    $postId = textFilter($_GET['id']);

                    if(!likeCreate($postId)){
                        echo "db error";
                    }else{
                        redirect("index.php");
                    }
                }

            ?>

        </div>
    </div>
</div>


<?php include 'template/footer.php'; ?>


