<?php include 'template/header.php'; ?>
<?php include 'template/nav.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <form action="post_add_ajax.php" id="add" method="post" enctype="multipart/form-data">
                <div class="form-inline">
                    <input type="text" name="title" placeholder="Title" class="form-control mr-2" required>

                    <input type="text" name="description" placeholder="Description"  class="form-control mr-2" style="width: 500px" required>

                    <button type="submit" class="btn btn-primary d-inline">Add Post</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include 'template/footer.php'; ?>

<script>

$("#add").on("submit",function (e) {
    e.preventDefault();
    let form =$(this)[0];
    let formData = new FormData(form);
    let to = $(this).attr("action");
    // console.log(odata);
    $.ajax({
        url:to,
        method:"POST",
        data:formData,
        processData: false,
        contentType: false,
        success:function (data) {
            let result = JSON.parse(data);
            console.log(result);
            if(result.status == 200){
                $("input").val("");
            }else{
                alert(result.message);
            }
        }
    });


})

</script>
