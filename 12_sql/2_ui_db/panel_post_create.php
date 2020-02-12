<?php include 'template/header.php'; ?>
<?php include 'template/panel_session.php'; ?>
<?php include 'template/panel_nav.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="">
                <div class="card">
                    <div class="card-body">
                        <h4 class="text-primary text-uppercase">Add New Post</h4>
                        <hr>
                        <?php

                            if(isset($_POST['add'])){
                                echo postCreate();
                            }

                        ?>
                        <form method="post">
                            <div class="form-group">
                                <label for="">Post Title</label>
                                <input type="text" class="form-control" name="postTitle" required>
                            </div>
                            <div class="form-group">
                                <label for="">Post Description</label>
                                <textarea type="text" class="form-control" name="postDescription" rows="10" required></textarea>
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
</div>


<?php include 'template/footer.php'; ?>


