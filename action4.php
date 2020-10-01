<?php
	include("control1.php");
	
	$f_uname=$_POST['uid'];
		
		$obj=new control1();
		$obj->dfriend($f_uname);

?>