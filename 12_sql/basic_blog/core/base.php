<?php


function con(){

    $db_host = "localhost";
    $db_userName = "root";
    $db_password = "";
    $db_name = "weekday_blog";

    return mysqli_connect($db_host,$db_userName,$db_password,$db_name);
}

define("URL","http://".$_SERVER['HTTP_HOST']."/swd_5/12_sql/basic_blog");

function assets($url){
    echo URL."/assets/".$url;
}

$role = array("1"=>"Admin","2"=>"user");



