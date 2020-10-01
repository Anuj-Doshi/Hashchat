<?php
	include("control.php");
	$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$email=$_POST['email'];
		$phno=$_POST['phone'];
		$cou=$_POST['country'];
		$state=$_POST['state'];
		$city=$_POST['city'];
		$pass=md5($_POST['pass']);
		$gender=$_POST['gender'];
		$dob=$_POST['date'];
		
		$obj=new control();
		$obj->signup($fname,$lname,$email,$phno,$cou,$state,$city,$gender,$dob,$pass);
?>