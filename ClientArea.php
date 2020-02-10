<?php
session_start();
if($_SESSION['bankinfo'])
{
	header("location: mainpage.php");
}else{
header("locaton: index.php");
}

?>
