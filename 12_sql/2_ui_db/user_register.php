<?php include 'template/header.php'; ?>

<div class="container">
    <div class="row align-items-center justify-content-center min-vh-100">
        <div class="col-12 col-md-6 col-lg-4">
            <div class="border border-faded p-3 rounded shadow-sm">
                <h4 class="text-primary">User Register</h4>
                <hr>
                <?php

                    if(isset($_POST['reg'])){

                        echo userRegister();

                    }

                ?>
                <form method="post">
                    <div class="form-group">
                        <label for=""> <i class="fa fa-user-circle text-primary"></i> User Name</label>
                        <input type="text" name="userName" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for=""> <i class="fa fa-envelope text-primary"></i> Login Email</label>
                        <input type="email" name="userEmail" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for=""> <i class="fa fa-key text-primary"></i> Password</label>
                        <input type="password" name="userPassword" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for=""> <i class="fa fa-key text-primary"></i>Confirm Password</label>
                        <input type="password" name="userPasswordConfirmation" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary" name="reg">
                            <i class="fa fa-save"></i>
                            Register
                        </button>
                        <a href="user_login_page.php" class="btn btn-outline-primary">
                            <i class="fa fa-user-circle"></i>
                            Login Account
                        </a>
                    </div>
                    <a href="index.php">
                        <i class="fa fa-home"></i>
                        Go Back To Home
                    </a>
                </form>
            </div>
        </div>
    </div>
</div>


<?php include 'template/footer.php'; ?>


