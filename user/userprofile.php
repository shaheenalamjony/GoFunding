<!-- check this sesion  -->

<?php
include('../dbconnection.php');
session_start();
if($_SESSION['is_login']){
    $rEmail=$_SESSION['rEmail'];
}else{
    header("location:userlogin.php");
}
$sql="SELECT uname,uemail from user where uemail='{$rEmail}'";
$result = $conn->query($sql);
if($result->num_rows == 1){
    $row=$result->fetch_assoc();
    $rName=$row['uname'];
}

// start update
if(isset($_REQUEST['nameupdate'])){
    if($_REQUEST['rName']==""){
        $passmsg='<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">Fill Name Fields</div>';
    }else{
        $rName=$_REQUEST['rName'];
        $sql="UPDATE user set uname='{$rName}' where uemail='{$rEmail}'";
        if($conn->query($sql) == true){
            $passmsg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert" >Update Successfully</div>';
        }else{
            $passmsg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert" >Unable to Update</div>';
        }
    }
}
// end update
?>
<!-- End check this season -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ekhane change kora lagbe</title>
     <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <!-- font awesome CSS-->
    <link rel="stylesheet" href="../css/all.min.css">

    <!-- Custom CSS-->
    <link rel="stylesheet" href="custom.css">
</head>
<body>

<!-- Remove top navbar and add dynamic header -->
<!-- Top Navbar -->
<nav class="navbar navbar-dark fixed-top bg-success flex-md-nowrap p-0 shadow"><a class="navbar-brand col-sm-e col-md-2 mr-0" href="userprofile.php">GoFunding</a></nav>
<!-- Top Navbar EEnd -->

<!-- start container -->
<div class="container-fluid" style="margin-top:40px;">
<!-- start row -->
    <div class="row">
        <!-- start side bar 1st column -->
        <nav class="col-sm-3 sidebar py-5 bg-light">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="userprofile.php">
                        <i class="fas fa-user"></i>
                        Profile
                    </a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="userprofile.php">
                        <i class="fas fa-user"></i>
                        Profile
                    </a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="#">
                        <i class="fas fa-accessible-icon"></i>
                        Funding Request
                    </a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="#">
                        <i class="fas fa-align center"></i>
                        Service Status
                    </a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="#">
                        <i class="fas fa-key"></i>
                        Change Password
                    </a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="#">
                        <i class="fas fa-sign-out-alt"></i>
                        Logout
                    </a>
                </li>
            </ul>
            </div>
        </nav>
        <!-- end side nav 1st column -->
        <!-- start profile area -->
        <div class="col-sm-6" style="margin-top:40px"> 
            <form action="" method="post">
                <div class="form-group">
                    <label for="rEmail">Email</label>
                    <input type="email" class="form-control" name="rEmail" id="rEmail" value="<?php echo $rEmail; ?>" readonly>                    
                </div>
                <div class="form-group">
                    <label for="rName">Name</label>
                    <input type="text" class="form-control" name="rName" value="<?php echo $rName; ?>" id="rName">
                </div>
                <button type="submit" class="btn btn-danger" name="nameupdate">Update</button>
                <?php 
                    if(isset($passmsg)){
                        echo '<br>'.$passmsg;
                    }
                ?>
            </form>
        </div>
        <!-- End profile area -->
    </div>
    <!-- End row -->
</div>
<!-- end container -->

<!-- javascript -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/all.min.js"></script>

</body>
</html>