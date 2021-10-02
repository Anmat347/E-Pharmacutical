<?php 
session_start();
?>

<!DOCTYPE HTML>
<html>
<head>
<title>User Signup</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">

	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body>
	<div class="limiter">
		<div class="container-login100" style="background-image: url('https://images.unsplash.com/photo-1512069772995-ec65ed45afd6?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60');">
			<div class="wrap-login100"><center>
<?php

extract($_POST);
// $Lname=$_SESSION['lname'];
// $Fname=$_SESSION['fname'];
// $uAdd=$_SESSION['add'];
 $_SESSION['add'] = $uAdd;
//echo $_SESSION['add'];
$_SESSION['email']=$email;
echo $_SESSION['email'];
$EncryptPass = md5($pwd);
include("database.php");
$rs=mysqli_query($conn,"select * from userprofile where Email='$email'");

if (mysqli_num_rows($rs)>0)
{
	echo "<br><br><br><h2>Login Id Already Exists</h2>";
	echo "Please <a href=loginaftersignup.php>Login</a>";
	exit;
}
$sql="INSERT INTO userProfile(F_Name,L_Name,Email,User_Addressr,password)values('$Lname','$Fname','$email','$uAdd','$EncryptPass')";
$rs=mysqli_query($conn,$sql)or die("Could Not Perform the Query");

echo "<br><br><br><p style=font-family: Times New Roman;'>Your Login ID  $email Created Sucessfully</p>";
echo "<br><div class=head1>Please Login using your Login ID </div>";
echo "<br><div class=head1><a href=loginaftersignup.php>Login</a></div>";
$conn->close();

?>

</center>
		</div>
	</div>
</div>
		<
</body>
</html>