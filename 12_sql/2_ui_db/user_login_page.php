<?php include 'template/header.php'; ?>

<div class="container">
    <div class="row align-items-center justify-content-center min-vh-100">
        <div class="col-12 col-md-6 col-lg-4">
            <div class="border border-faded p-3 rounded shadow-sm">
                <h4 class="text-primary">User Login</h4>
                <hr>
                <form action="">
                    <div class="form-group">
                        <label for=""> <i class="fa fa-user-circle text-primary"></i> Login Email</label>
                        <input type="email" name="userEmail" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for=""> <i class="fa fa-key text-primary"></i> Password</label>
                        <input type="password" name="userPassword" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary">
                            <i class="fa fa-unlock"></i>
                            Login
                        </button>
                        <a href="user_register.php" class="btn btn-outline-primary">
                            <i class="fa fa-pencil"></i>
                            Register Account
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<?php include 'template/footer.php'; ?>


