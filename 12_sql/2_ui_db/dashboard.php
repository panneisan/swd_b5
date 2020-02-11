<?php
session_start();
if(empty($_SESSION['user']['id'])){
    header("location:user_login_page.php");
}else{

    echo "<a href='logout.php'> logout</a>";
}

