<?php
include ("database.php");
$id = $_GET['q'];
$sql = "SELECT * from medicine where med_name = '$id' ";
$rs=mysqli_query($conn,$sql);
if (mysqli_num_rows($rs)>0) {
while($row = mysqli_fetch_array($rs)){
?>	
<table>
		<tr>
			<th>Name</th>
			<th>Price</th>
			<th>Description</th>
		</tr>
		<tr>
			<td><?php echo $id; ?></td>
			<td><?php echo $row["Med_UnitPrice"]; ?></td>
			<td><?php echo $row["Med_Manufacturer"]; ?></td>
		</tr>
</table>
<?php
}
}
else{
	echo "Name Does Not exist";
}

?>