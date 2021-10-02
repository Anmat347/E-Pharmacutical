<?php
session_start();
include('database.php');
if (isset($_SESSION['email'])){
$mail = $_SESSION['email'];
echo "<center><bold>Welcome ".$_SESSION['email']."</bold></center>";
$umail="INSERT INTO loggedUser(email) values ('$mail')";
$rs = mysqli_query($conn, $umail);
}
else{
	echo "Session not set";
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
	 <script type="text/javascript" src="jquery-1.4.2.min.js"></script>
 <script type="text/javascript" src="jquery.autocomplete.js"></script>
 <link rel="stylesheet" type="text/css" href="serachstyle.css">
	<style type="text/css">


input {
	padding: 1px 2px;
    border-radius:25px;
    height: 50px;
    width: 500px;
    -webkit-writing-mode: horizontal-tb !important;
    
    
    letter-spacing: normal;
    word-spacing: normal;
    text-transform: none;
    text-indent: 0px;
    text-shadow: none;
    display: inline-block;
    text-align: start;
    appearance: textfield;
    background-color: #FFB6C1;
    -webkit-rtl-ordering: logical;
    cursor: text;
    margin: 0em;
    font: 400 13.3333px Arial;
    padding: 1px 2px;
    border-width: 2px;
    border-style: inset;
    border-image: initial;
  
}
input[type="search" i] {
    appearance: searchfield;
    box-sizing: border-box;
    padding: 5px 25px;
    height: 50px;
    width: 500px;/*
background-color: -internal-light-dark(rgb(255, 255, 255), rgb(59, 59, 59));*/

}
button{
	float: right;
	height: 50px;
    width: 10%;
    outline: none;
    border: none;
    border-radius: 5px;
    color: #fff;
    background: linear-gradient(to right, #fb5283, #ff3527);
    font-weight: 500;
    letter-spacing: 1px;
    font-size: 18px;
    text-transform: uppercase;
    cursor: pointer;
    transition: all 0.3s ease;
    float: right;
}

tr , th, td{
	border : 1px solid red;
	padding: 10px;
	width: 20% ;
	border-collapse: collapse;
}
.center {
    padding-left: 8%;
    padding-right: 8%;
}
table{
		
	  table-layout: fixed ;
 /* width: 100% ;*/
}

</style>
</head>
<body >


			<?php
				include ("navlogout.php");
				?>
<center>
	<form method="post">
				<div class="search-box">
					<img src="images/search.png">
					<input type="search"style='flood-color:black;font-family:Times New Roman;font-size:150%;' name="q" id="searchmed" placeholder="    Search Medicine" >
				</div>
				<div class="center">
				<button id="custom-btn" name="submit">Submit</button>
					</div>
				
	</form>


</center>

	<script src="js/main.js"></script>
 <script> 

 jQuery(function(){ 
$selected = $("#searchmed").autocomplete("search.php");

 });
 </script>

<?php
// include ("database.php");
// $mail = $_SESSION['email'];

// $uAdd=$_SESSION['uAdd'];
// $uid="SELECT User_id from userprofile where L_name = '$lname'";
include ("database.php");
if(isset($_POST['submit']))
{
$id =($_POST["q"]);
$_SESSION['med_name']=$id;
// echo $_SESSION['med_name'];
$sql = "SELECT * from medicine where med_name = '$id' ";
$rs=mysqli_query($conn,$sql);
if (mysqli_num_rows($rs)>0) {
while($row = mysqli_fetch_array($rs)){
	$_SESSION['price'] = $row['Med_UnitPrice'];

?>	
<br><br><br><br><br><br>
<table class="center">
		<tr>
			<th>Name</th>
			<th>Price</th>
			<th>Description</th>
		</tr>
		<tr>
			<td><?php echo $id; ?></td>
			<td><?php echo $row['Med_UnitPrice']; ?></td>
			<td><?php echo $row["Med_Manufacturer"]; ?></td>
		</tr>
</table>
<br>
<div class="center">
<button onclick="lastpage()" name="order">Order Now</button></div>
<?php
}
}
else{
	echo "Name Does Not exist";
}
}

?>
<script type="text/javascript">
	function lastpage(){
		location.replace("order.php")
	}
</script>

</body>
</html>