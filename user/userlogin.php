<!-- change background color
add logo in the header area  -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
	<link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" type="text/css" href="../css/logindesign.css">
</head>
<body>
	
    <form action="../dbvalid/userlogindb.php" method="post">
		<span class="text-center mt-5" style="font-size:30px;">GoFunding</span>
     	<h2>User LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Email</label>
     	<input type="email" name="Email" placeholder="Email"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit">Login</button>
          <a href="../userregistration.php" class="ca">Create an account</a>
     </form>

<!-- why we are best platform-using html,css,js toggle  sesction-->

	 <!-- javascript  -->
	 <script src="../js/jquery.min.js"></script>
	 <script src="../js/popper.min.js"></script>
	 <script src="../js/bootstrap.min.js"></script>
	 <script src="../js/all.min.js"></script>
</body>
</html>