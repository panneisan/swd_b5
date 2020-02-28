<div class="container position-sticky" style="z-index:5;top:0;">
    <div class="row">
        <div class="col-12">
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-3">
                <a class="navbar-brand" href="#">MMS</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link text-uppercase" href="index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link text-uppercase dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Category
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">



                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-uppercase" href="software_center.php" >Software Center</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-uppercase" href="about.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-uppercase" href="contact.php">Contact</a>
                        </li>
                    </ul>
                    <div>
                        <?php if(@$_SESSION['user']['id']){ ?>
                        <a href="panel_dashboard.php" class="btn btn-light text-uppercase text-primary">
                            <i class="fa fa-user-circle"></i>
                            <?php echo $_SESSION['user']['name']; ?>
                        </a>
                        <?php }else{ ?>
                        <a href="user_login_page.php" class="btn btn-light text-uppercase text-primary">
                            <i class="fa fa-user-circle"></i>
                            Login
                        </a>
                        <?php } ?>

                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>