<?php
	include("control.php");
	session_start();
	if(isset($_REQUEST['c']))
	{
		$uname=$_SESSION['uname'];
		$cou=$_REQUEST['c'];

		if($cou=='0')
		{
			$obj=new control();
			$obj->changepstatus($uname,$cou);
		}
		elseif($cou=='1')
		{
			$obj=new control();
			$obj->changeppstatus($uname,$cou);
			
		}
		else
		{
			echo $cou;
		}
	}
?>