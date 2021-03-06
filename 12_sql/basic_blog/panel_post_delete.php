<?php include 'template/header.php'; ?>
<?php include 'template/panel_session.php'; ?>
<?php include 'template/panel_nav.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <h4 class="text-primary text-uppercase">
                                <i class="fa fa-plus-circle"></i>
                                Post Delete
                            </h4>
                            <div>
                                <a href="panel_post_list.php" class="btn btn-outline-primary">
                                    <i class="fa fa-list"></i>
                                    Post List
                                </a>
                            </div>
                        </div>
                        <hr>
                        <?php
                            $id = textFilter($_GET['id']);
                            echo postDelete($id);
                            redirect("panel_post_list.php");
                            ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include 'template/footer.php'; ?>


