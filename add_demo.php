<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="icon" href="IMAGE/icon.PNG">
<title>HashChat</title>
<link rel="stylesheet" href="w3-css.css">
</head>
<style>
	
	.tab-button {
    background-color: #009688;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 8px 8px;
    transition: 0.3s;
    font-size: 12px;
	color:white;
	font-family: 'Ubuntu', sans-serif;
	margin-left: 20%;
}
	
.tab-button-2 {
    background-color: #8E8E8E;
    float: left;
    border: 1px solid #000000;
    outline: none;
/*    cursor: pointer;*/
/*    padding: 8px 8px;*/
    transition: 0.3s;
    font-size: 12px;
	color:white;
	font-family: 'Ubuntu', sans-serif;
	margin-left: 6%;
	
}

/* Change background color of buttons on hover */
.tab-button:hover {
    background-color: #005951;
}

/* Create an active/current tablink class */
.tab-button:active {
    background-color: #005951;
}
	
</style>
<?php
 include("navigation.php");	
 $status="1";
?>
<br><br><br>
<body>
	<div class="w3-container" style="margin-left: 15%">

	<div class="w3-card-4" style="width:13%;background-color: white;padding-bottom: 1%;float:left;border-bottom-left-radius: 5px;border-bottom-right-radius: 5px">
		<img src="Profile/temp_photo.jpg" class="w3-image">
		<center><h4 style="font-family: 'Ubuntu', sans-serif;">Anuj Doshi</h4></center>
		<?php
			
			if($status=="0")
			{
			?>
				<button class="tab-button">Add Friend</button>
			<?php		
			}
			else
			{
			?>
<!--				<button class="tab-button-2" disabled>friend Request Sent</button>-->
				<a class="tab-button-2">friend Request Sent</a>
			<?php
			}
			
		?>
		
	</div>
	
	
	
</div>
</body>
</html>
