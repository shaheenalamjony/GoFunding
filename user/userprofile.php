<!-- check this sesion  -->

<?php
define('TITLE', 'profile');
define('PAGE', 'userprofile');
include('include/header.php');
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
    <?php
        include('include/footer.php');
    ?>