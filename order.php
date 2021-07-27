<?php
session_start();
include ("database.php");
extract($_POST);
$mail = $_SESSION['email'];
$med_name = $_SESSION['med_name'];
// echo $med_name;
// echo $mail."<br>";
// $lname=$_SESSION['lname'];
// echo $lname."<br>";
$uAdd=$_SESSION['add'];
// echo $uAdd."<br>";
$uid="SELECT * from userprofile where Email = '$mail'";
$rs = mysqli_query($conn, $uid);

if (mysqli_num_rows($rs)>0){
// echo "Atruba";
	while($rowData = mysqli_fetch_array($rs)){
		$Uid = $rowData[0];
    }
}

$price = $_SESSION['price'];
// echo $price; 
// echo  date("Y/m/d") . "<br>";
$toddate = date("Y/m/d") ;
$newdate = strtotime("+1week 2 days");
$deldate = date("d/m/Y",$newdate);
// $resDate = mysqli_query($conn,$date);

$que = "INSERT into user_order(Ord_Date,Ship_Address, Delivery_Date,User_fk,tot_Price) values ('$toddate','$uAdd','$deldate',$Uid,'$price')";
$rs=mysqli_query($conn ,$que)or die("Could Not Perform the Query");

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>PHARMACEUTICAL</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
		<style>
			tr , th, td{
				border : 1px solid black;
				padding: 10px;
				width: 10% ;
				border-collapse: collapse;
			}
			.center {
			    padding-left: 8%;
			    padding-right: 8%;
			}
			table{
					border-collapse: collapse;
				  table-layout: fixed ;
			 /* width: 100% ;*/
			}
			.wrap-login100{
			background: linear-gradient(to bottom, grey, pink);
			background: linear-gradient(to right, grey, pink);
			}
			p{
				color: black;
				font-family: times new roman;
				font-size: 20px;
			}
	</style>
</head>
<body>
	
	<div class="limiter">

		<div class="container-login100" style="background-image: url('https://images.unsplash.com/photo-1512069772995-ec65ed45afd6?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60');">
			<?php
				include ("navlogout.php");

	?>
	<div class="wrap-login100">
<?php echo "<center>".$mail."</center>";
?>
	<center><h2><bold>Order Details</bold></h2>
	<!-- <img src="https://cdn.dribbble.com/users/2298909/screenshots/6715481/your-order-is-on-the-way.gif" width="300" height="300" class="center"> -->
		
		<p class="b">Thankyou!</p>
		<p style="text-align: center;font-size: 150%;
		font-weight: bold;">Successfully order done!</p>
		</center>
		<table class="center">
			<tr>
				<th>SUMMARY:</th>
				<th>SHIPPING ADDRESS:</th>
				<th>ITEMS SHIPPED:</th>
				<th>QTY</th>
				<th>PRICE</th>
			</tr>
			<td>
				<ol>
		<li><strong>Order Date:</strong> <?php echo $toddate ?></li>
		<li><strong>Order Total:</strong> <?php echo "<i>".$price."</i>"; ?></li>
		<li><strong>Delivery Date:</strong> <?php echo $deldate; ?></li>
         </ol>   </td>
        
            	<td> <?php echo $uAdd; ?>
            	</td>
            	<td><?php echo $med_name ?></td>
	<td>1</td>
	<td><?php echo $price ?></td>
            </tr>
</table>

<div class="center">
<p>Subtotal (1 Items): <?php echo $price ?></p>
<p>Estimated Tax: Rs:15.03</p>
<p>Order Total: <?php echo $price; ?></p>
</div></div>
</div>
</body>
</html> 

