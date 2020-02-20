<div class="card position-sticky" style="top:70px">
    <div class="card-body">
        <p class="text-primary font-weight-bold text-uppercase">Search</p>
        <form action="index.php" method="post">
            <div class="d-flex">
                <input type="text" name="key" class="form-control mr-2" placeholder="Search Everything">
                <button class="btn btn-primary" name="search">
                    <i class="fa fa-search"></i>
                </button>
            </div>
        </form>
        <hr>
        <p class="text-primary font-weight-bold text-uppercase">Category List</p>
        <div class="list-group">
            <?php foreach (categories() as $c){ ?>
                <a href="index.php?category=<?php echo $c['id']; ?>" class="list-group-item list-group-item-action">
                    <?php echo $c['title']; ?>
                </a>
            <?php } ?>
        </div>
        <hr>
        <p class="text-primary font-weight-bold text-uppercase">Recent Post</p>
        <div class="list-group">
            <?php foreach (getPost(1,5) as $r){ ?>
                <a href="post_detail.php?id=<?php echo $r['id']; ?>" class="list-group-item list-group-item-action">
                    <?php echo shortText($r['title'],70); ?>
                </a>
            <?php } ?>
        </div>

    </div>
</div>
