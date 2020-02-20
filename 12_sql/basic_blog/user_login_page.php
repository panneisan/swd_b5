<?php

    include 'template/header.php';
    if(isset($_SESSION['user']['id'])){
        session_unset();
        session_destroy();
    }
?>

<div class="container">
    <div class="row align-items-center justify-content-center min-vh-100">
        <div class="col-12 col-md-6 col-lg-4">
            <div class="border border-faded p-3 rounded shadow-sm">
                <h4 class="text-primary">User Login</h4>
                <hr>

                <?php

                if(isset($_SESSION['regStatus'])){
                    if($_SESSION['regStatus'] == "success"){
                        echo showError("success","Register Successfully");
                    }
                    $_SESSION['regStatus'] = "";
                }

                if(isset($_POST['login'])){

                    echo userLogin();

                }

                ?>

                <form method="post">
                    <div class="form-group">
                        <label for=""> <i class="fa fa-user-circle text-primary"></i> Login Email</label>
                        <input type="email" name="userEmail" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for=""> <i class="fa fa-key text-primary"></i> Password</label>
                        <input type="password" name="userPassword" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary" name="login">
                            <i class="fa fa-unlock"></i>
                            Login
                        </button>
                        <a href="user_register.php" class="btn btn-outline-primary">
                            <i class="fa fa-pencil"></i>
                            Register Account
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


