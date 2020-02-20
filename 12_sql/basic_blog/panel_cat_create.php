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
                                Add New Category
                            </h4>
                            <div>
                                <a href="panel_cat_list.php" class="btn btn-outline-primary">
                                    <i class="fa fa-list"></i>
                                    Category List
                                </a>
                            </div>
                        </div>
                        <hr>
                        <?php

                        if(isset($_POST['add'])){
                            echo catCreate();
                        }

                        ?>
                        <form method="post">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="">Category Title</label>
                                        <input type="text" class="form-control" name="catTitle" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Category Description</label>
                                <textarea type="text" class="form-control" name="catDescription" rows="10" required></textarea>
                            </div>
                            <div class="form-group mb-0">
                                <button type="submit" class="btn btn-primary" name="add">
                                    <i class="fa fa-save"></i>
                                    Add Category
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include 'template/footer.php'; ?>


