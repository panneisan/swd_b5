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
                            <i class="fa fa-plus-circle"></i>
                            Add New Post
                        </h4>
                        <div>
                            <a href="panel_software_list.php" class="btn btn-outline-primary">
                                <i class="fa fa-list"></i>
                                Post List
                            </a>
                        </div>
                    </div>
                    <hr>

                    <?php


                    if (isset($_POST['add'])){

                        echo softwareUpdate($_GET['id']);
                    }
                    $info = software($_GET['id']);

                    ?>

                    <form method="post">
                        <div class="row">
                            <div class="col-12 col-md-8 ">
                                <div class="form-group">
                                    <label for="">Software Title</label>
                                    <input type="text" class="form-control" value="<?php echo $info['title'];?>" name="softwareTitle" required>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-group">
                                    <label for="">Software Price</label>
                                    <input type="text" class="form-control" value="<?php echo $info['price'];?>" name="softwarePrice" required>

                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Software Description</label>
                            <textarea type="text" class="form-control" name="softwareDescription" rows="10" required><?php echo $info['description'];?></textarea>
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


