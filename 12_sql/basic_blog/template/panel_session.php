<?php

if(empty($_SESSION['user']['id'])){
    header("location:user_login_page.php");
}

