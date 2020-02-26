<?php

require "../core/base.php";
session_start();
require "../core/functions.php";

if(catCreateApi()){
    $result = array("status"=>200,"text"=>"success");
    echo json_encode($result);
}else{
    $result = array("status"=>405,"text"=>"fail");
    echo json_encode($result);
}
