<?php

$userid = $_POST['userid'];
$password = $_POST['password'];

//continue to login to server

$server = "localhost";
$username = "admin_77452763";
$password = "1TimePa$$";
$db_name = "admin_bank";

//creating sql connection and inserting records

$conn = new mysqli($server, $username, $password, $db_name);
if($conn->connect_error){
	die("Connection failed : " . $conn->connect_error);
}else{
session_start();
$query="select * from bankinfo where userid='$userid' and password='$password'";
$result=mysqli_query($conn,$query);
$_SESSION['bankinfo']=true;
	header("location: ClientArea.php");
}

?>
