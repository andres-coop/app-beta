<?php
//Data base connection
require ('../config/database.php');

//Get data from ñpgin form
$e_mail = $_POST['email'];
$p_asswd = $_POST['pswd'];
$enc_pass = md5($p_asswd);


$sql = " SELECT u.* FROM users u WHERE u.email = '$e_mail' AND u.password = '$enc_pass' ";

$res =pg_query($sql);

if($res){
    $num_re = pg_num_rows($res);
    if($num_re > 0){
        header('refresh:0;url=home.php');
    }else{
        echo "<script> alert('Email or password not found 😱😱😱😱😱😱😱')</script>";
        header('refresh:0;url=signin.html');
    }
}else{
    echo "query error... 😭😭😭😭";
}

?>