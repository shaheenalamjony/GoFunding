<!-- add header
add  What should I know before I start fundraising on gofunding
add footer
validation all input field -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">;
  <link rel="stylesheet" type="text/css" href="css/logindesign.css">
</head>
<body>
  <form action="dbvalid/userregistrationvalid.php" method="POST">
     	<h2 class="text-center">Create an Account</h2>
       <label>Name</label>
     	<input type="text" 
                 name="Name" 
                 placeholder="Enter your name"><br>
       <label>Email</label>
     	<input type="email" 
                 name="Email" 
                 placeholder="Enter your email"><br>

          <label>Password</label>
          <input type="password" 
                 name="Password" 
                 placeholder="Enter your password">
 
          <button type="submit" class="btn btn-danger mt-4 btn-block shadow-sm font-weight-bold" name="Signup">Sign Up</button>
          <a href="user/userlogin.php" class="ca">Already have an account?</a>
          
         
     </form>
  
  <!-- <div class="container pt-5" id="registration">
  <h2 class="text-center">Create an Account</h2>
  <div class="row mt-4 mb-4">
    <div class="col-md-6 offset-md-3">
      <form action="dbvalid/userregistrationvalid.php" class="shadow-lg p-4" method="POST">
        <div class="form-group">
          <i class="fas fa-user"></i><label for="name" class="pl-2 font-weight-bold">Name</label><input type="text"
            class="form-control" placeholder="Name" name="Name">
        </div>
        <div class="form-group">
          <i class="fas fa-user"></i><label for="email" class="pl-2 font-weight-bold">Email</label><input type="email"
            class="form-control" placeholder="Email" name="Email">
          <!--Add text-white below if want text color white-->
          <!-- <small class="form-text">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <i class="fas fa-key"></i><label for="pass" class="pl-2 font-weight-bold">New
            Password</label><input type="password" class="form-control" placeholder="Password" name="Password">
        </div> -->
        <!-- <button type="submit" class="btn btn-danger mt-5 btn-block shadow-sm font-weight-bold" name="Signup">Sign Up</button>
        <em style="font-size:10px;">Note - By clicking Sign Up, you agree to our Terms, Data
          Policy and Cookie Policy.</em>
        <?php //if(isset($regmsg)) {echo $regmsg; } ?>
      </form>
    </div>
  </div>
</div> --> -->
</body>
</html>
