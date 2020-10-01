<?php
	include("control.php");
	session_start();
	$uname=$_POST['uname'];
	$passs=$_POST['pass'];
	
	$obj=new control();
	$obj->login($uname,$passs);
?>