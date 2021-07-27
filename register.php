<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">

	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">


</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('https://images.unsplash.com/photo-1512069772995-ec65ed45afd6?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60');">
			<?php
				include ("nav.php");
				?>
			<div class="wrap-login100">

				<form  method="post" class="login100-form validate-form" action="signupuser.php" >
					

					<span class="login100-form-title p-b-34 p-t-27">
						Sign in
					</span>

				<!-- 	<div class="wrap-input100 validate-input" data-validate = "Enter User_id">
						<input class="input100" type="text" name="uid" placeholder="Enter User_id">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div> -->

					<div class="wrap-input100 validate-input" data-validate = "Enter Your name">
						<input class="input100" type="text" name="Fname" placeholder="Fisrt Name">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter Email">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter Contact Number">
						<input class="input100" type="text" name="cno" placeholder="Contact Number">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="pwd" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter Address">
						<input class="input100" type="text" name="uAdd" placeholder="Address">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>



					<div class="container-login100-form-btn">
						<button class="login100-form-btn" onclick="//signupuser.php">
							Register 
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
<?php

include ("database.php");
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    // $uid = $_POST['uid'];
    $pwd = $_POST["pwd"]; 
    $cno = $_POST['cno'];
    $Fname = $_POST['Fname'];
    $email = $_POST['email'];
    $uAdd=$_POST['uAdd'];
 // $_SESSION['uid'] = $uid;
 $_SESSION['pwd'] = $pwd;
 $_SESSION['cno'] = $cno;
 $_SESSION['fname'] = $Fname;
 $_SESSION['email'] = $email;
 $_SESSION['add'] = $uAdd;
 
echo  $_SESSION['cno'] ;
  }


$conn->close();
?>

</html>

