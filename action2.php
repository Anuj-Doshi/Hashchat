<?php
	include("control.php");
	session_start();
	$email=$_SESSION['email'];
	$code=$_POST['code'];
	$obj=new control();
	$obj->verify($code,$email);
?>