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
function catCreate(){
    $catTitle = textFilter($_POST['catTitle']);
    $catDescription = textFilter($_POST['catDescription']);
    if(empty($catTitle) || empty($catDescription)){

        return showError("danger","Title နှင့် Description များပါဝင်ရန်လိုအပ်ပါသည်။ <i class='fa fa-frown-o'></i>");

    }else{

        $sql = "INSERT INTO categories (title,description) VALUES ('$catTitle','$catDescription')";

        if(runQuery($sql)){

            return showError("success","Category Add ခြင်းအောင်မြင်ပါသည်။ ");

        }else{

            return showError("danger","db input error");

            echo mysqli_error(con());

        }

    }
}

function catCreateApi(){
    $catTitle = textFilter($_POST['catTitle']);
    $catDescription = textFilter($_POST['catDescription']);
    
    if(empty($catTitle) || empty($catDescription)){

        return showError("danger","Title နှင့် Description များပါဝင်ရန်လိုအပ်ပါသည်။ <i class='fa fa-frown-o'></i>");

    }else{

        $sql = "INSERT INTO categories (title,description) VALUES ('$catTitle','$catDescription')";

        return runQuery($sql);

            

    }
}
function catUpdate($id){

    $catTitle = textFilter($_POST['catTitle']);
    $catDescription = textFilter($_POST['catDescription']);
    $userId = $_SESSION['user']['id'];

    if(empty($catTitle) || empty($catDescription)){

        return showError("danger","Title နှင့် Description များပါဝင်ရန်လိုအပ်ပါသည်။ <i class='fa fa-frown-o'></i>");

    }else{

        $sql = "UPDATE categories SET title='$catTitle',description='$catDescription' WHERE id='$id'";

        if(runQuery($sql)){

            return showError("success","category update အောင်မြင်ပါသည်။ ");

        }else{

            return showError("danger","db input error");

            echo mysqli_error(con());

        }

    }
}
function catDelete($id){
        $currentUserId = $_SESSION['user']['id'];
        $catUserId =category($id)['id'];

        $sql = "SELECT * FROM users WHERE id = '$catUserId'";
        $info = first($sql);

        if(!$info){
            $sql = "DELETE FROM categories WHERE id='$id'";
        }else{
            echo showError("danger","Category is already in use. You Can't Delete It.");
            die();
        }
    return runQuery($sql);
}
//category function end

//software function start

function software($id){
    $sql = "SELECT * FROM software WHERE id='$id'";
    return first($sql);
}

function softwares($condition=1){


        $sql = "SELECT * FROM software WHERE '$condition'";

    return get($sql);
}
function softwareCreate(){


        $softwareTitle = textFilter($_POST['softwareTitle']);
        $softwareDescription = textFilter($_POST['softwareDescription']);
        $softwarePrice = textFilter($_POST['softwarePrice']);
        $userID = $_SESSION['user']['id'];

        if (empty($softwareTitle) || empty($softwareDescription || empty($softwarePrice))) {

            return showError("warning", "Post Empty");
        } else {

            $sql = "INSERT INTO software (title,description,price,user_id) VALUES ('$softwareTitle','$softwareDescription','$softwarePrice','$userID')";

            if (runQuery($sql)) {

                return showError("success", "software success");
            } else {

                return showError("danger", "software fail");
                echo mysqli_error(con());

            }

        }

}

function softwareUpdate($id){


        $softwareTitle = textFilter($_POST['softwareTitle']);
        $softwareDescription = textFilter($_POST['softwareDescription']);
        $softwarePrice = textFilter($_POST['softwarePrice']);
//    $userID = $_SESSION['user']['id'];

        if (empty($softwareTitle) || empty($softwareDescription || empty($softwarePrice))){

            return showError("warning","Post Empty");
        }else {

            $sql = "UPDATE software SET title='$softwareTitle',description='$softwareDescription',price='$softwarePrice' WHERE id='$id'";

            if (runQuery($sql)) {

                return showError("success", "software success");
            } else {

                return showError("danger", "software fail");
                echo mysqli_error(con());

            }
        }

}

function softwareDelete($id){



        $sql ="DELETE FROM software WHERE id='$id'";


    return runQuery($sql);
}

function softwareAccept($id){
    $sql = "UPDATE software SET status = '1' WHERE id='$id'";
//    die($sql);
    return runQuery($sql);
}

//software function end

//student function start
function student($id){
    $sql = "SELECT * FROM student_list WHERE id='$id'";
    return first($sql);
}

function students($condition=1){

    $sql = "SELECT * FROM student_list WHERE '$condition' ORDER BY id DESC LIMIT 3";
    return get($sql);
}


function studentCreate(){

    $studentName = textFilter($_POST['studentName']);
    $studentPhone = textFilter($_POST['studentPhone']);
    $studentMajor = textFilter($_POST['studentMajor']);
    $studentDescription = textFilter($_POST['studentDescription']);
//    $userID = $_SESSION['user']['id'];

    if (empty($studentName) || empty($studentPhone) || empty($studentMajor) || empty($studentDescription)){

        return showError("warning"," Empty");
    }else{

        $sql = "INSERT INTO student_list (name,phone,major,description) VALUES ('$studentName','$studentPhone','$studentMajor','$studentDescription')";

        if (runQuery($sql)){

            return showError("success"," Success");
        }else{

            return showError("danger"," Fail");
            echo mysqli_error(con());

        }
    }
}

function studentUpdate($id){

    $studentName = textFilter($_POST['studentName']);
    $studentPhone = textFilter($_POST['studentPhone']);
    $studentMajor = textFilter($_POST['studentMajor']);
    $studentDescription = textFilter($_POST['studentDescription']);
//    $userID = $_SESSION['user']['id'];

    if (empty($studentName) || empty($studentPhone) || empty($studentMajor) || empty($studentDescription)){

        return showError("warning"," Empty");
    }else{

        $sql = "UPDATE student_list SET name='$studentName',phone='$studentPhone',major='$studentMajor',description ='$studentDescription' WHERE id='$id'";

        if (runQuery($sql)){

            return showError("success"," Success");
        }else{

            return showError("danger"," Fail");
            echo mysqli_error(con());

        }
    }
}

//student function end

//about function start

function about($id,$limit=3){
    $sql = "SELECT * FROM about_message WHERE id='$id'";
    return first($sql);
}

function abouts($condition=1,$limit =1){

    $sql = "SELECT * FROM about_message WHERE '$condition' ORDER BY id DESC LIMIT $limit";
    return get($sql);
}

function aboutCreate(){

    $aboutTitle = textFilter($_POST['aboutTitle']);
    $aboutDescription = textFilter($_POST['aboutDescription']);
//    $userID = $_SESSION['user']['id'];

    if (empty($aboutTitle) || empty($aboutDescription)){

        return showError("warning"," Empty");
    }else{

        $sql = "INSERT INTO about_message (title,description) VALUES ('$aboutTitle','$aboutDescription')";

        if (runQuery($sql)){

            return showError("success"," Success");
        }else{

            return showError("danger"," Fail");
            echo mysqli_error(con());

        }
    }
}


//about function end


//post function start

function post($id){
    $sql = "SELECT * FROM posts WHERE id='$id'";
    return first($sql);
}

function posts($condition = 1){
    if(isAdmin()){
        $sql = "SELECT * FROM posts WHERE $condition ORDER BY id DESC";
    }else if(isUser()){
        $sql = "SELECT * FROM posts WHERE $condition AND user_id = '{$_SESSION['user']['id']}' ORDER BY id DESC";
    }
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

function postUpdate($id){

    $postTitle = textFilter($_POST['postTitle']);
    $postDescription = textFilter($_POST['postDescription']);
    $postCategory = textFilter($_POST['postCategory']);
    $userId = $_SESSION['user']['id'];

    if(empty($postTitle) || empty($postDescription)){

        return showError("danger","Title နှင့် Description များပါဝင်ရန်လိုအပ်ပါသည်။ <i class='fa fa-frown-o'></i>");

    }else{

        $sql = "UPDATE posts SET title='$postTitle',description='$postDescription',category_id='$postCategory' WHERE id='$id'";

        if(runQuery($sql)){

            return showError("success","Post တင်ခြင်းအောင်မြင်ပါသည်။ ");

        }else{

            return showError("danger","db input error");

            echo mysqli_error(con());

        }

    }
}

function postDelete($id){

    if(isUser()){
        $currentUserId = $_SESSION['user']['id'];
        $postUserId = post($id)['user_id'];
        if($currentUserId != $postUserId){
            echo showError("danger","Permission Denied");
            die();
        }else{
            $sql = "DELETE FROM posts WHERE id='$id' AND user_id='{$_SESSION['user']['id']}'";
        }
    }

    if(isAdmin()){
        $sql = "DELETE FROM posts WHERE id='$id'";
    }

    return runQuery($sql);
}

//post function end


//home function start

function getPost($condition=1,$limit=10){
    $sql = "SELECT * FROM posts WHERE $condition LIMIT $limit";
    return get($sql);
}
function getSoftware($condition =1){
    $sql = "SELECT * FROM software WHERE $condition";
//    die($sql);
    return get($sql);
}


//home function end

//contact function start
function contactMessage($id){
    $sql = "SELECT * FROM contact_messages WHERE id='$id'";
    return first($sql);
}
function contactMessages($condition = 1){
        $sql = "SELECT * FROM contact_messages WHERE $condition";
    return get($sql);
}

function contactMessageCreate(){
    $contactMessageName = textFilter($_POST['contactMessageName']);
    $contactMessageEmail = textFilter($_POST['contactMessageEmail']);
    $contactMessageDescription = textFilter($_POST['contactMessageDescription']);
    if(empty($contactMessageName) || empty($contactMessageEmail) || empty($contactMessageDescription)){

        return showError("danger","name,email နှင့် Description များပါဝင်ရန်လိုအပ်ပါသည်။ <i class='fa fa-frown-o'></i>");

    }else{
        $sql = "INSERT INTO contact_messages (name,email,description) VALUES ('$contactMessageName','$contactMessageEmail','$contactMessageDescription')";

        if(runQuery($sql)){

            return showError("success","message sent ခြင်းအောင်မြင်ပါသည်။ ");

        }else{

            return showError("danger","db input error");

            echo mysqli_error(con());

        }

    }
}

function panelContactMessageDelete($id){
    $sql = "DELETE FROM contact_message WHERE id='$id'";
    return runQuery($sql);
}

function contactInfoCreate(){
    $contactInfoName = textFilter($_POST['contactInfoName']);
    $contactInfoEmail = textFilter($_POST['contactInfoEmail']);
    $contactInfoPhone = textFilter($_POST['contactInfoPhone']);
    $contactInfoAddress = textFilter($_POST['contactInfoAddress']);
    if(empty($contactInfoName) || empty($contactInfoEmail) || empty($contactInfoPhone) || empty($contactInfoAddress)){

        return showError("danger","name,email နှင့် Description များပါဝင်ရန်လိုအပ်ပါသည်။ <i class='fa fa-frown-o'></i>");

    }else{
        $sql = "INSERT INTO contact_info (name,email,phone,address) VALUES ('$contactInfoName','$contactInfoEmail','$contactInfoPhone','$contactInfoAddress')";

        if(runQuery($sql)){

            return showError("success","contact info add ခြင်းအောင်မြင်ပါသည်။ ");

        }else{

            return showError("danger","db input error");

            echo mysqli_error(con());

        }

    }
}
function contactInfo($id){
    $sql = "SELECT * FROM contact_info WHERE id='$id'";
    return first($sql);
}
function contactInfos($condition = 1){
    $sql = "SELECT * FROM contact_info WHERE $condition ORDER BY id DESC LIMIT 1";
    return get($sql);
}
//contact function end

//like function start
    function likeInfo($id){
        $sql = "SELECT user_id FROM likes WHERE post_id='$id'";
        $likes = get($sql);
        $userArr = [];
        foreach ($likes as $l){
            array_push($userArr,user($l['user_id'])['name']);
        }

        return implode(", ",$userArr);
    }
    function likeCount($postId){
        $sql = "SELECT COUNT(id) AS totalLike FROM likes WHERE post_id='$postId'";
        return first($sql)['totalLike'];
    }
    function isLiked($postId,$userId){
        $sql = "SELECT * FROM likes WHERE post_id='$postId' AND user_id='$userId'";
        if(first($sql)){
            return true;
        }else{
            return false;
        }
    }
    function likeCreate($postId){
        $userId = $_SESSION['user']['id'];
        if(isLiked($postId,$userId)){
            $sql = "DELETE FROM likes WHERE post_id='$postId' AND user_id='$userId'";

        }else{
            $sql = "INSERT INTO likes (user_id,post_id) VALUE ('$userId','$postId')";

        }
        return runQuery($sql);
    }
//like function end