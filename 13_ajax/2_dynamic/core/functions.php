<?php


//common function start
function textFilter($text){
    $text = trim($text);
    $text = htmlentities($text,ENT_QUOTES);
    $text = stripcslashes($text);
    return $text;
}

function showError($color="primary",$message="Something Wrongs"){
    return "<p class='alert alert-$color'>$message</p>";
}

function shortText($text,$length=100){
    $output = substr($text,0,$length);
    if(strlen($text) <= $length){
        return $output;
    }
    return $output." ....";
}

function runQuery($sql){
    return mysqli_query(con(),$sql);
}

function first($sql){
    return mysqli_fetch_assoc(runQuery($sql));
}
function redirect($where){
    echo "<script>location.href='$where'</script>";
}
function get($sql){
    $data = [];
    $query = mysqli_query(con(),$sql);
    while ($row = mysqli_fetch_assoc($query)){
        array_push($data,$row);
    }
    return $data;
}
function isAdmin(){
    if($_SESSION['user']['role'] == 1){
        return true;
    }
    return false;
}

function isUser(){
    if($_SESSION['user']['role'] == 2){
        return true;
    }
    return false;
}

function authCheck(){
    if(isset($_SESSION['user']['id'])){
        return true;
    }else{
        return false;
    }
}

function success($data=null){
    $arr = array("status"=> 200);
    if (isset($data)){
        $arr['message'] = $data;
//        array_push($arr,"message"=>$data);
    }
    return json_encode($arr);
}

function error($statusCode = 404,$data=null){
    $arr = array("status"=> $statusCode);
    if (isset($data)){
        $arr['message'] = $data;

//        array_push($arr,"message"=>$data);
    }
    return json_encode($arr);
}

//common function end

//post function start

function post($id){
    $sql = "SELECT * FROM posts WHERE  id ='$id'";
    return first($sql);
}

function posts($condition = 1){
    $sql = "SELECT * FROM posts WHERE $condition";
    return get($sql);
}

function postCreate(){
    $title = textFilter($_POST['title']);
    $description = textFilter($_POST['description']);
    $sql = "INSERT INTO posts (title,description) VALUES  ('$title','$description')";
//    die($sql);
    return runQuery($sql);
}

function postDelete($id){
    $sql = "DELETE FROM posts WHERE id='$id'";
    return runQuery($sql);
}

function postUpdate(){
    $title = textFilter($_POST['title']);
    $description = textFilter($_POST['description']);
    $id = textFilter($_POST['id']);
    $sql = "UPDATE posts SET title='$title',descripiton='$description' WHERE id='$id'";
    return runQuery($sql);
}

//post function end

