<?php include 'template/header.php'; ?>
<?php include 'template/nav.php'; ?>

<div class="container  " >
    <div class="row  mb-3">
        <div class="col-12 ">
            <div class="shadow">
                <img src="assets/img/two_bg.jpg" alt="" class="w-100 rounded">
            </div>
        </div>
    </div>
    <div class="row mb-3">
        <?php

            $student =students();
//            print_r( $student);
             foreach ($student as $s) {

        ?>
        <div class="col-12 col-md-4">
            <div class="card">
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item text-uppercase">
                            <i class="fa fa-user-circle fa-fw text-primary"></i> <?php echo $s['name'];?>
                        </li>
                        <li class="list-group-item text-uppercase">
                            <i class="fa fa-phone fa-fw text-primary"></i><?php echo $s['phone'];?>
                        </li>
                        <li class="list-group-item text-uppercase">
                            <i class="fa fa-book fa-fw text-primary"></i><?php echo $s['major'];?>
                        </li>
                    </ul>
                    <div class="text-justify mt-3">

                        <p>
                            <?php echo shortText($s['description'],70) ;?>
                        </p>
                    </div>

                </div>
            </div>
        </div>
        <?php }?>

    </div>
    <div class="row">
        <?php

        $about = abouts();
        foreach ($about as $b){
        ?>
        <div class="col-12">
            <h4 class="text-primary text-uppercase">
                <?php echo $b['title'];?>
            </h4>
            <p class="text-justify" >
                <?php echo $b['description'];?>
            </p>
        </div>
        <?php }?>
    </div>
</div>


<?php include 'template/footer.php'; ?>
