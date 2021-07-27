<?php  

$servername="localhost:8111";
$username="root";
$password="";
$dbname="epharma";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if (!$conn){
    die("Connection Failed " . mysqli_connect_error());
}


?>