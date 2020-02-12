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

function runQuery($sql){
    return mysqli_query(con(),$sql);
}

function first($sql){
    return mysqli_fetch_assoc(runQuery($sql));
}


//common function end


//user function start

function userRegister(){
    $userName = textFilter($_POST['userName']);
    $userEmail = textFilter($_POST['userEmail']);
    $userPassword = textFilter($_POST['userPassword']);
    $userPasswordConfirmation = textFilter($_POST['userPasswordConfirmation']);

    if(empty($userName) && empty($userEmail) && empty($userPassword) && empty($userPasswordConfirmation)){

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