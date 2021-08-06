<?php

include('../dbconnection.php');

  if(isset($_REQUEST['Signup'])){
    // Checking for Empty Fields
    if(($_REQUEST['Name'] == "") || ($_REQUEST['Email'] == "") || ($_REQUEST['Password'] == "")){      
    } else {        
        $rName = $_REQUEST['Name'];
        $rEmail = $_REQUEST['Email'];
        $rPassword = $_REQUEST['Password'];
        $sql = "INSERT INTO user(uname, uemail, upassword) VALUES ('$rName','$rEmail', '$rPassword')";
        $conn->query($sql);      
      }
    }
  
?>