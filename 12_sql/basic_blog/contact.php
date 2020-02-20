<?php include 'template/header.php'; ?>
<?php include 'template/nav.php'; ?>

<div class="container">
    <div class="row mb-3">
        <div class="col-12 mb-3">
            <img src="assets/img/two_bg.jpg" alt="" style="width: 100%; height: 300px;">
        </div>
        <div class="col-12 col-md-7">
            <div class="">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <h4 class="text-primary text-uppercase">
                                <i class="fa fa-envelope"></i>
                                Contact Message
                            </h4>
                        </div>
                        <hr>
                        <?php

                        if(isset($_POST['add'])){
                            echo contactMessageCreate();
                        }

                        ?>
                        <?php

                        $contactInfos = contactInfos();
                        ?>
                        <form method="post">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="">Name</label>
                                        <input type="text" class="form-control" name="contactMessageName" required>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input type="email" class="form-control" name="contactMessageEmail" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Description</label>
                                <textarea type="text" class="form-control" name="contactMessageDescription" rows="10" required></textarea>
                            </div>
                            <div class="form-group mb-0">
                                <button type="submit" class="btn btn-primary" name="add">
                                    <i class="fa fa-save"></i>
                                    Sent Message
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-5">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="text-primary text-uppercase">
                            <i class="fa fa-envelope"></i>
                            Contact Info
                        </h4>
                    </div>
                </div>
                <div class="card-body">
                    <div>
                        <table class="table table-bordered">
                            <tbody>
                            <?php foreach ($contactInfos as $c){ ?>
                            <tr>
                                <th scope="row">Name</th>
                                <td><?php echo $c['name']?></td>
                            </tr>
                            <tr>
                                <th scope="row">Email</th>
                                <td><?php echo $c['email']?></td>
                            </tr>
                            <tr>
                                <th scope="row">Phone</th>
                                <td colspan="2"><?php echo $c['phone']?></td>
                            </tr>
                            <tr>
                                <th scope="row">Address</th>
                                <td colspan="2"><?php echo $c['address']?></td>
                            </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d20932.356281549542!2d96.17324375220706!3d16.786774158614076!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1ec8746416593%3A0x712a03c56ad7bd2!2sSule%20Pagoda!5e0!3m2!1sen!2smm!4v1582095780274!5m2!1sen!2smm" width="100%" height="187" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include 'template/footer.php'; ?>


