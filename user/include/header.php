<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo TITLE; ?></title>
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
        <nav class="col-sm-2 sidebar py-5 bg-light">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item <?php if(PAGE == 'userprofile'){echo "bg-warning";} ?>">
                        <a class="nav-link" href="userprofile.php">
                        <i class="fas fa-user"></i>
                        Profile
                    </a>
                </li>
                <!-- <li class="nav-item">
                        <a class="nav-link" href="userprofile.php">
                        <i class="fas fa-user"></i>
                        Profile
                    </a>
                </li> -->
                <li class="nav-item <?php if(PAGE == 'submitrequest'){echo "bg-warning";} ?>">
                        <a class="nav-link" href="submitrequest.php">
                        <i class="fas fa-accessible-icon"></i>
                        Funding Request
                    </a>
                </li>
                <li class="nav-item <?php if(PAGE == 'checkstatus'){echo "bg-warning";} ?>">
                        <a class="nav-link" href="checkstatus.php">
                        <i class="fas fa-align center"></i>
                        Service Status
                    </a>
                </li>
                <li class="nav-item <?php if(PAGE == 'changepassword'){echo "bg-warning";} ?>">
                        <a class="nav-link" href="userchangepassword.php">
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
        
    