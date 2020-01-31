<?php

$id =  $_GET['id'];

$con = mysqli_connect("localhost","root","","weekday_sql");
$sql = "DELETE FROM contacts WHERE id='$id'";
if(mysqli_query($con,$sql)){
    header("location:read.php");
}else{
    echo "delete error";
}