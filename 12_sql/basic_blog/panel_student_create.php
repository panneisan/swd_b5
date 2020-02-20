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
                                Add New Student
                            </h4>
                        </div>
                        <hr>
                        <?php

                        if(isset($_POST['add'])){
                            echo studentCreate();
                        }

                        ?>
                        <form method="post">
                            <div class="row">
                                <div class="col-12 col-md-6 ">
                                    <div class="form-group">
                                        <label for="">Name</label>
                                        <input type="text" class="form-control" name="studentName" required>
                                    </div>

                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="">Phone</label>
                                        <input type="phone" class="form-control" name="studentPhone" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Major</label>
                                <input type="text" class="form-control" name="studentMajor" required>
                            </div>
                            <div class="form-group">
                                <label for="">Description</label>
                                <textarea type="text" class="form-control" name="studentDescription" rows="10" required></textarea>
                            </div>
                            <div class="form-group mb-0">
                                <button type="submit" class="btn btn-primary" name="add">
                                    <i class="fa fa-save"></i>
                                    Save
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


