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
                                Add New Contact Info
                            </h4>
                        </div>
                        <hr>
                        <?php

                        if(isset($_POST['add'])){
                            echo contactInfoCreate();
                        }

                        ?>
                        <form method="post">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="">Contact Info Name</label>
                                        <input type="text" class="form-control" name="contactInfoName" required>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="">Contact Info Email</label>
                                        <input type="email" class="form-control" name="contactInfoEmail" required>
                                    </div>
                                </div>
                                <div class="col-12 col-md-12">
                                    <div class="form-group">
                                        <label for="">Contact Info Phone</label>
                                        <input type="text" class="form-control" name="contactInfoPhone" required>
                                    </div>
                                </div>

                            </div>
                            <div class="form-group">
                                <label for="">Contact Info Address</label>
                                <textarea type="text" class="form-control" name="contactInfoAddress" rows="10" required></textarea>
                            </div>
                            <div class="form-group mb-0">
                                <button type="submit" class="btn btn-primary" name="add">
                                    <i class="fa fa-save"></i>
                                    Add Contact Info
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


