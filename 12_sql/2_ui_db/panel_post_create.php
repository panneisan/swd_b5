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
                                Add New Post
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

                            if(isset($_POST['add'])){
                                echo postCreate();
                            }

                        ?>
                        <form method="post">
                            <div class="row">
                                <div class="col-12 col-md-8">
                                    <div class="form-group">
                                        <label for="">Post Title</label>
                                        <input type="text" class="form-control" name="postTitle" required>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="form-group">
                                        <label for="">Post Category</label>
                                        <select name="postCategory" id="" class="form-control">
                                            <?php foreach (categories() as $c){ ?>
                                                <option value="<?php echo $c['id']; ?>">
                                                    <?php echo $c['title']; ?>
                                                </option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
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


