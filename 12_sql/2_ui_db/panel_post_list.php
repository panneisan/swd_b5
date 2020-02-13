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
                                <i class="fa fa-list"></i>
                                Post List
                            </h4>
                            <div>
                                <a href="panel_post_create.php" class="btn btn-outline-primary">
                                    <i class="fa fa-plus-circle"></i>
                                    Add Post
                                </a>
                            </div>
                        </div>
                        <hr>

                        <?php

                        $posts = posts();

                        if(count($posts) < 1 ) {

                            showError("info", "Post is Empty");

                            }else {

                        ?>

                            <table class="table mb-0">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Owner</th>
                                    <th>Controls</th>
                                    <th>Create Time</th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php foreach ($posts as $p){ ?>

                                    <tr>
                                        <td><?php echo $p['id']; ?></td>
                                        <td><?php echo $p['title']; ?></td>
                                        <td><?php echo $p['category_id']; ?></td>
                                        <td><?php echo $p['user_id']; ?></td>
                                        <td>

                                        </td>
                                        <td><?php echo $p['created_at']; ?></td>

                                    </tr>

                                <?php } ?>

                                </tbody>
                            </table>

                        <?php } ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include 'template/footer.php'; ?>


