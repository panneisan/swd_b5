<?php include 'template/header.php';?>
<?php include "template/panel_session.php";?>
<?php include "template/panel_nav.php";?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="text-primary text-uppercase">
                            <i class="fa fa-align-justify"></i>
                            About
                        </h4>
                    </div>
                    <hr>

                    <?php

                    if (isset($_POST['add'])){

                        echo aboutCreate();
                    }

                    ?>

                    <form method="post">
                        <div class="row">
                            <div class="col-12 ">
                                <div class="form-group">
                                    <label for=""  >About Title</label>
                                    <input type="text" class="form-control" name="aboutTitle" required>
                                </div>
                            </div>

                        </div>
                        <div class="form-group">
                            <label for="" >About Description</label>
                            <textarea type="text" class="form-control" name="aboutDescription" rows="10" required></textarea>
                        </div>
                        <div class="form-group mb-0">
                            <button type="submit" class="btn btn-primary" name="add">
                                <i class="fa fa-save"></i>
                                Add Post
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'template/footer.php';?>


