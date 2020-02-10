<?php
session_start();
if($_SESSION['bankinfo'])
{
	echo "login successful";
}else{
header("locaton: gogle.com");
}

?>
