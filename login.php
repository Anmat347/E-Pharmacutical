<?php
session_start();
include("database.php");
if(isset($_POST['submit']))
{
	$pass =($_POST["pwd"]); 
    $email= $_POST['mail'];
    $EncryptPass = md5($pass);
    
	$rs=mysqli_query($conn,"select * from userprofile where Email='$email' and password='$EncryptPass'");
	if(!$rs || mysqli_num_rows($rs)==0){
		$found='N';
	}
	else{
		$_SESSION["login"]=$email;
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
				<form class="login100-form validate-form" method="post">
					

					<span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="mail" id='mail'placeholder="Username">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="pwd" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>


					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="submit" id="submit" value="login">
							Login
						</button>
	     			</div>
	     			<br><br>
<center>


     <p style="color: White; font-family: Times New Roman; font-size: 20px;">New User</p>
     	<div class="container-login100-form-btn">
     		<div class="login100-form-btn"> 
     		<input type=button onClick="parent.location='register.php'" value='Signup' formaction="register.php">
	     	</div>
	    </div>



<?php
		  if(isset($found))
		  {
		  	echo "<p style='color: Red; font-family: Times New Roman;'>Invalid user id or password<br><a href='login.php'>Please try again</p>";	
		  }
		  // else{
		  //      	if (isset($_SESSION["login"])){
			 //    header("Location: medsearch.php");;
		  // 	//echo "This is executing";
			 //  }
		  // }
		  ?> 
</center>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	

	<script src="js/main.js"></script>

</body>
</html>