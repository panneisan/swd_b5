<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Read</title>

</head>
<body>
<?php

function textFilter($text){
    $text = trim($text);
    $text = htmlentities($text,ENT_QUOTES);
    $text = stripcslashes($text);
    return $text;
}

$con = mysqli_connect("localhost","root","","weekday_sql");
if(isset($_POST['show'])){
    $name = textFilter($_POST['name']);
    $sql = "SELECT * FROM contacts WHERE name='$name'";
    $query = mysqli_query($con,$sql);
    print_r(mysqli_fetch_assoc($query));
}


?>
<br>
<br>
<br>
<form action="security.php" method="post">
    <input type="text" name="name">
    <button type="submit" name="show">Show Phone</button>
</form>



</body>
</html>