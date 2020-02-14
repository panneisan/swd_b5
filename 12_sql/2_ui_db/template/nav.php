<div class="container">
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
                            <a class="nav-link text-uppercase" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link text-uppercase dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Category
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                                <?php foreach (categories() as $c){ ?>
                                <a class="dropdown-item" href="<?php  ?>"><?php echo $c['title'] ?></a>
                                <?php } ?>


                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-uppercase" href="#" >Software Center</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-uppercase" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-uppercase" href="#">Contact</a>
                        </li>
                    </ul>
                    <div>
                        <a href="user_login_page.php" class="btn btn-light text-uppercase text-primary">
                            <i class="fa fa-user-circle"></i>
                            Login
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>