<?php


function con(){

    $db_host = "localhost";
    $db_userName = "root";
    $db_password = "";
    $db_name = "weekday_blog";

    return mysqli_connect($db_host,$db_userName,$db_password,$db_name);
}

define("URL","http://".$_SERVER['HTTP_HOST']."/swd_5/12_sql/2_ui_db/");

function assets($url){
    echo URL."/assets/".$url;
}

