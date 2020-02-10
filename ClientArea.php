<?php
session_start();
if($_SESSION['bankinfo'])
{
	header("location: MainPage.php");
}else{
header("locaton: index.php");
}

?>
