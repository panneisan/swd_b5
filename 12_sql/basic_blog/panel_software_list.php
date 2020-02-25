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
                            <i class="fa fa-list"></i>
                            Software List
                        </h4>
                        <div>
                            <a href="panel_software_create.php" class="btn btn-outline-primary">
                                <i class="fa fa-plus-circle"></i>
                                Add Software
                            </a>
                        </div>
                    </div>
                    <hr>

                    <?php

                    $posts = softwares();

                    if (count($posts) < 1){

                        echo  showError("warning","Post is empty");

                    }else{

                        ?>
                        <table class="table" id="post-list">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Title</th>
                                <th>Price</th>
                                <th>Control</th>
                                <?php if(isAdmin()){ ?>
                                    <th>Accept</th>
                                <?php } ?>
                                <th>Created Time</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach($posts as $p){?>
                                <tr>
                                    <td><?php echo $p['id'];?></td>
                                    <td><?php echo shortText($p['title']);?></td>
                                    <td><?php echo textFilter($p['price']);?></td>
                                    <td>

                                        <div class="dropdown">
                                            <a class="btn btn-outline-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fa fa-gear"></i>
                                            </a>

                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item btn-del" href="panel_software_delete.php?id=<?php echo $p['id'];?>">
                                                    <i  class="fa fa-trash text-danger fa-fw"></i> Delete
                                                </a>
                                                <a class="dropdown-item" href="panel_software_update.php?id=<?php echo $p['id'];?>">
                                                    <i class="fa fa-edit text-warning fa-fw"></i> Edit
                                                </a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </div>

                                    </td>
                                    <?php if(isAdmin()){ ?>
                                        <td>
                                            <?php if($p['status'] == '1'){ ?>
                                                <span class="font-weight-bolder text-success">
                                                    Accepted
                                                </span>
                                            <?php  }else{ ?>
                                                <a href="panel_software_accept.php?id=<?php echo $p['id']; ?>" class="btn btn-outline-success">Accept</a>

                                            <?php } ?>

                                        </td>
                                    <?php } ?>
                                    <td><?php echo date("d / m / Y",strtotime($p['created_at']));?></td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>

                    <?php }?>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    <i class="fa fa-trash fa-4x"></i> Delete Software
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a  href="#" id="del-link" class="btn btn-danger">Delete</a>
            </div>
        </div>
    </div>
</div>

<?php include 'template/footer.php';?>
<script>
    $(".btn-del").click(function (e) {
        e.preventDefault();
        $delUrl = $(this).attr("href");
        console.log($delUrl);
        $("#del-link").attr("href",$delUrl);
        $(".modal").modal("show");

    });

    $("#post-list").dataTable();

</script>

