<?php
	include("control.php");
	session_start();
	$uname=$_SESSION['uname'];
	$cou=$_POST['c'];

	if($cou==0)
	{
		$obj=new control();
		$obj->changeistatus($uname,$cou);
	}
	else
	{
		$obj=new control();
		$obj->changeiistatus($uname,$cou);
	}
?>