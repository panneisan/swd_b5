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

                            <table class="table mb-0" id="post-list">
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
                                        <td><?php echo shortText($p['title']); ?></td>
                                        <td><?php echo category($p['category_id'])['title']; ?></td>
                                        <td><?php echo user($p['user_id'])['name']; ?></td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fa fa-gear"></i>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item btn-del" href="panel_post_delete.php?id=<?php echo $p['id']?>" >
                                                        <i class="fa fa-trash-o fa-fw text-danger"></i>
                                                        Delete
                                                    </a>
                                                    <a class="dropdown-item" href="panel_post_update.php?id=<?php echo $p['id']?>">
                                                        <i class="fa fa-edit fa-fw text-warning"></i>
                                                        Edit
                                                    </a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td><?php echo date("d / m / Y",strtotime($p['created_at'])); ?></td>

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
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    <i class="fa fa-trash text-danger"></i>
                    Alert Warning
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <i class="fa fa-trash-o fa-5x"></i>
                Are U Sure To Delete This Row ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a href="#" id="delLink" class="btn btn-danger">Delete</a>
            </div>
        </div>
    </div>
</div>

<?php include 'template/footer.php'; ?>
<script>
    $(".btn-del").click(function (e) {
        e.preventDefault();
        $delUrl = $(this).attr("href");
        console.log($delUrl);
        $("#delLink").attr("href",$delUrl);
        $(".modal").modal("show");
    });

    $('#post-list').DataTable();
</script>


