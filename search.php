<?php
include("database.php");
$id = $_GET['q'];
$sql = "select med_name from medicine where med_name like '".$id."%'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {

 while($row = $result->fetch_assoc()) {
 echo $row["med_name"]."\n";
 }
}
else {
 echo "0 results";
}

$conn->close();
?>





