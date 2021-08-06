<?php

include('../dbconnection.php');

  if(isset($_REQUEST['Signup'])){
    // Checking for Empty Fields
    if(($_REQUEST['Name'] == "") || ($_REQUEST['Email'] == "") || ($_REQUEST['Password'] == "")){
      $regmsg = '<div class="alert alert-warning mt-2" role="alert"> All Fields are Required </div>';
    } else {
      $sql = "SELECT uemail FROM user WHERE uemail='".$_REQUEST['Email']."'";
      $result = $conn->query($sql);
      if($result->num_rows == 1){
        $regmsg = '<div class="alert alert-warning mt-2" role="alert"> Email ID Already Registered </div>';
      } else {        
        $rName = $_REQUEST['Name'];
        $rEmail = $_REQUEST['Email'];
        $rPassword = $_REQUEST['Password'];
        $sql = "INSERT INTO user(uname, uemail, upassword) VALUES ('$rName','$rEmail', '$rPassword')";
        if($conn->query($sql) == TRUE){
          $regmsg = '<div class="alert alert-success mt-2" role="alert"> Account Succefully Created </div>';
          // edit this section and add header
        } else {
          $regmsg = '<div class="alert alert-danger mt-2" role="alert"> Unable to Create Account </div>';
        }
      }
    }
  }
?>