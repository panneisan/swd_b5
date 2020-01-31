<?php
    $id = $_GET['id'];
    $con = mysqli_connect("localhost","root","","weekday_sql");
    $sql = "SELECT * FROM contacts WHERE id='$id'";
    $query = mysqli_query($con,$sql);
    $info = mysqli_fetch_assoc($query);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
    <style>
        fieldset{
            width: 300px;
            margin: 100px auto;
        }
        .form-group{
            margin-bottom: 10px;
        }
        .form-group input{
            width: 100%;
        }
    </style>
</head>
<body>
<pre>
<?php

    if(isset($_GET['update'])){
        $name = $_GET['name'];
        $phone = $_GET['phone'];
        $id = $_GET['id'];

        if($name && $phone){
            $sql = "UPDATE contacts SET name='$name',phone='$phone' WHERE id='$id'";
            if(mysqli_query($con,$sql)){
                header("location:read.php");
            }else{
                echo "Update Error";
            }
        }
    }

?>
</pre>
<form action="" method="get">

    <fieldset>
        <legend>Contact Create Form</legend>
        <div class="form-group">
            <lable>Name</lable>
            <br>
            <input type="text" name="name" value="<?php echo $info['name'];?>">
        </div>
        <div class="form-group">
            <lable>Phone</lable>
            <br>
            <input type="number" name="phone" value="<?php echo $info['phone'];?>">
        </div>
        <input type="hidden" name="id" value="<?php echo $info['id']; ?>">
        <div class="form-group">

            <button type="submit" name="update" value="update">Update Contact</button>
            <a href="read.php">All Contact</a>
        </div>

    </fieldset>

</form>

</body>
</html>
