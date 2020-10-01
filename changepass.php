<!doctype html>
<html>
<head>
<meta charset="utf-8">
<?php
	session_start();
	?>
<title>Hashchat</title>
</head>

<style>


input[type=text], select, textarea ,input[type=password]{
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
<body>
	<?php
		include("navigation.php");
	?>
	<div class="container" style="margin-top: 8%">
 		<center><h1 style="color: black">Change Password</h1></center>
  		<form method="post">
			<label for="fname" style="color: black">Old Password</label>
			<input type="password" id="fname" name="opass" placeholder="Your Password.." style="color: black">

			<label for="lname" style="color: black">New Password</label>
			<input type="password" id="lname" name="npass" placeholder="Your Password.."  style="color: black">
			<center><input type="submit" value="Submit" style="background-color: #009688" name="sub"></center>
	</div>
		</form>
</body>
</html>
<?php
	if(isset($_REQUEST['sub']))
	{
		$uname=$_SESSION['uname'];
		$opass=md5($_POST['opass']);
		$npass=md5($_POST['npass']);
		$con=mysqli_connect("localhost","root","","hashchat");
		
		$sq=mysqli_query($con,"select * from user where uname='$uname' and pass='$opass'");
		$num=mysqli_num_rows($sq);
		if($num!=0)
		{
			$sq1=mysqli_query($con,"update user set pass='$npass' where uname='$uname'");
			if($sq1)
			{
				echo "<script>alert('Password Is Successfully Changed!!!')</script>";
				?>
				
				<script>
					window.location.href="index.php";
			</script>
				<?php
				
			}
			else
			{
				echo "<script>alert('Password Is Not Changed.Try Again!!!')</script>";
			}
		}
		else
		{
			echo "<script>alert('Old Password is Incarrect!!!')</script>";
		}
	}
?>