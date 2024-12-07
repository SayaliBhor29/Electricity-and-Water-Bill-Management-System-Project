<?php
session_start();
unset($_SESSION["username"]);
$_SESSION["username"]=null;
 	session_destroy();
	echo ("<script LANGUAGE='JavaScript'>
		window.location.href='main.php';
    	   	</script>");
?>