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

function get($sql){
    $data = [];
    $query = mysqli_query(con(),$sql);
    while ($row = mysqli_fetch_assoc($query)){
        array_push($data,$row);
    }
    return $data;
}


//common function end


//user function start

function user($id){
    $sql = "SELECT * FROM users WHERE id='$id'";
    return first($sql);
}

function users(){

}

function userRegister(){
    $userName = textFilter($_POST['userName']);
    $userEmail = textFilter($_POST['userEmail']);
    $userPassword = textFilter($_POST['userPassword']);
    $userPasswordConfirmation = textFilter($_POST['userPasswordConfirmation']);

    if(empty($userName) || empty($userEmail) || empty($userPassword) || empty($userPasswordConfirmation)){

        return showError("danger","အကုန်ဖြည့်ရမည် <i class='fa fa-frown-o'></i>");

    }else{

        if($userPassword != $userPasswordConfirmation){

            return showError("warning","Password မတူပါခင်ဗျာ <i class='fa fa-frown-o'></i>");

        }else{

            $savePassword = password_hash($userPassword,PASSWORD_DEFAULT);

            $sql = "INSERT INTO users ( name, email, password) VALUES ('$userName','$userEmail','$savePassword')";

            if(runQuery($sql)){

                $_SESSION['regStatus'] = "success";

                header("location:user_login_page.php");

            }else{

                return showError("danger","db input error");

            }

        }
    }
}

function userLogin(){
    $userEmail = textFilter($_POST['userEmail']);
    $userPassword = textFilter($_POST['userPassword']);
    if(empty($userEmail) && empty($userPassword)){
        return showError("danger","User Email OR Password empty");
    }else{

        $sql = "SELECT * FROM users WHERE email = '$userEmail'";
        $info = first($sql);

        if(!$info){

            return showError("danger","User Email OR Password Wrong");

        }else{

            if(!password_verify($userPassword,$info['password'])){

                return showError("danger","User Email OR Password Wrong");

            }else{

                $_SESSION['user'] = $info;
                header("location:panel_dashboard.php");

            }


        }

    }
}

//user function end

//category function start

function category($id){
    $sql = "SELECT * FROM categories WHERE id='$id'";
    return first($sql);
}

function categories($condition = 1){

    $sql = "SELECT * FROM categories WHERE $condition";
    return get($sql);
}

//category function end

//post function start

function post(){

}

function posts($condition = 1){
    $sql = "SELECT * FROM posts WHERE $condition";
    return get($sql);
}

function postCreate(){

    $postTitle = textFilter($_POST['postTitle']);
    $postDescription = textFilter($_POST['postDescription']);
    $postCategory = textFilter($_POST['postCategory']);
    $userId = $_SESSION['user']['id'];

    if(empty($postTitle) || empty($postDescription)){

        return showError("danger","Title နှင့် Description များပါဝင်ရန်လိုအပ်ပါသည်။ <i class='fa fa-frown-o'></i>");

    }else{

        $sql = "INSERT INTO posts (title,description,category_id,user_id) VALUES ('$postTitle','$postDescription','$postCategory','$userId')";


        if(runQuery($sql)){

            return showError("success","Post တင်ခြင်းအောင်မြင်ပါသည်။ ");

        }else{

            return showError("danger","db input error");
            echo mysqli_error(con());

        }

    }

}

//post function end
