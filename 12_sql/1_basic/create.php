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

    if(isset($_GET['create'])){
        //get
//        print_r($_GET);
        $name = $_GET["name"];
        $phone = $_GET["phone"];

        //mysql connection
        $con = mysqli_connect("localhost","root","","weekday_sql");

        if(preg_match("/^[0-9]*$/",$phone)){

            if($name && $phone){

                $sql = "INSERT INTO contacts (name,phone) VALUES ('$name','$phone')";

//            $query = mysqli_query($con,$sql);

                if(mysqli_query($con,$sql)){
                    header("location:read.php");
                }else{
                    echo "db input fail";

                }



            }else{

            return "phone must be number";

        }


        }
//        header("location:create.php");
    }

?>
</pre>

<a href="connection.php" target="_parent"></a>

<form action="" method="get" enctype="multipart/form-data">

    <fieldset>
        <legend>Contact Create Form</legend>

        <div class="form-group">
            <lable>Name</lable>
            <br>
            <input type="text" name="name">
        </div>
        <div class="form-group">
            <lable>Phone</lable>
            <br>
            <input type="number" name="phone">
        </div>
        <div class="form-group">

            <button type="submit" name="create" value="add">Add Contact</button>
            <a href="read.php">All Contact</a>
        </div>

    </fieldset>

</form>

</body>
</html>