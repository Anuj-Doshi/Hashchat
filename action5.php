<?php
	include("control1.php");
	session_start();
	$uname=$_SESSION['uname'];
	$f_uname=$_POST['uname'];
		
		$obj=new control1();
		$obj->addfriend($f_uname,$uname);

?>