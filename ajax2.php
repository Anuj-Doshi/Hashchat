<?php
$con=mysqli_connect("localhost","root","","hashchat");

if(isset($_REQUEST['done']))
{
	$uname=$_REQUEST['uname'];
	$id=$_REQUEST['id'];
	
	$sql=mysqli_query($con,"select * from view_daily where uname='$uname'");
	$num=mysqli_num_rows($sql);
	if($num==0)
	{
		$sq=mysqli_query($con,"insert into view_daily values ('','$id','$uname')");
	}
}

	

?>