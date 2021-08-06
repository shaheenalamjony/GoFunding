<?php

include('../dbconnection.php');
session_start();
if(!isset($_SESSION['is_login'])){

    // if(isset($_REQUEST['Email']) && isset($_REQUEST['Password'])){
    $rEmail=trim($_REQUEST['Email']);
    $rPassword=trim($_REQUEST['password']);
    $sql="SELECT uemail,upassword from user where uemail='{$rEmail}' AND upassword='{$rPassword}' limit 1";
    $result=$conn->query($sql);
    if($result->num_rows ==1){
        $_SESSION['is_login']=true;
        $_SESSION['rEmail']=$rEmail;
        header("location:../user/userprofile.php");
    }
    else{
        echo "login failed";
    }
}else{
    header("location:../user/userprofile.php");
}
//}
?>