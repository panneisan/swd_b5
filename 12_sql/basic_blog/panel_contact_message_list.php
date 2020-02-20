<?php include 'template/header.php'; ?>
<?php include 'template/panel_session.php'; ?>
<?php include 'template/panel_nav.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <h4 class="text-primary text-uppercase">
                                <i class="fa fa-list"></i>
                                Contact Message List
                            </h4>
                        </div>
                        <hr>

                        <?php

                        $contactMessages = contactMessages();

                        if(count($contactMessages) < 1 ) {

                            showError("info", "Message is Empty");

                        }else {

                            ?>

                            <table class="table mb-0" id="post-list">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Description</th>
                                    <th>Controls</th>
                                    <th>Create Time</th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php foreach ($contactMessages as $c){ ?>

                                    <tr>
                                        <td><?php echo $c['id']; ?></td>
                                        <td><?php echo shortText($c['name']); ?></td>
                                        <td><?php echo $c['email'] ?></td>
                                        <td><?php echo $c['description'] ?></td>
                                        <td>
                                            <a class="btn btn-outline-primary btn-del" href="panel_contact_message_delete.php?id=<?php echo $c['id']?>" >
                                                <i class="fa fa-trash-o fa-fw text-danger"></i>
                                                Delete
                                            </a>
                                        </td>
                                        <td><?php echo date("d / m / Y",strtotime($c['created_at'])); ?></td>

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


