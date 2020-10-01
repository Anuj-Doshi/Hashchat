<?php
	include("control.php");
	?>


<html>
<head>
<meta charset="utf-8">
<link rel="icon" href="IMAGE/icon.PNG">
<title>HashChat</title>
<link rel="stylesheet" href="w3-css.css">
<link href="https://fonts.googleapis.com/css?family=Risque" rel="stylesheet">
<link href="css-1/style.css" rel='stylesheet' type='text/css' />

<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'>



<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<style>
	.ddi
	{
		border: 1px thin #000000;
		width: 25%;
		z-index: 99999;
		background-color: white;
		margin-top: 5%;
		margin-left: 75%;
		height:50%;
/*		min-width: 10%;*/
		transition: 0.3s;
		overflow: scroll;
		
	}
	.content
	{
		margin-left: 2%;
		
		
	}

</style>	
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
            background-color: #009688;
            float: left;

            outline: none;
            /*    cursor: pointer;*/
            padding: 8px 8px;
            transition: 0.3s;
            font-size: 12px;
            color:white;
            font-family: 'Ubuntu', sans-serif;
            margin-left:5%;

        }
		.tab-button-3 {
            background-color: #009688;
            float: left;

            outline: none;
            cursor: pointer;
			border: hidden;
            padding: 8px 8px;
            transition: 0.3s;
            font-size: 12px;
            color:white;
            font-family: 'Ubuntu', sans-serif;
            margin-left:15%;

        }
		.tab-button-4 {
            background-color:#009688;
            float: left;
            outline: none;
            cursor: pointer;
			border: hidden;
            padding: 8px 8px;
            transition: 0.3s;
            font-size: 12px;
            color:white;
            font-family: 'Ubuntu', sans-serif;
            margin-left:5%;

        }
		.tab-button-5 {
            background-color:#009688;
            float: left;
            outline: none;
            cursor: pointer;
			border: hidden;
            padding: 8px 8px;
            transition: 0.3s;
            font-size: 12px;
            color:white;
            font-family: 'Ubuntu', sans-serif;
            margin-left:28%;

        }
        /* Change background color of buttons on hover */
        .tab-button:hover {
            background-color: #005951;
        }

        /* Create an active/current tablink class */
        .tab-button:active {
            background-color: #005951;
        }
		.fn
		{
			border: hidden;
			background-color: white;
		}
    </style>
</head>

<body>
	<?php
		include("navigation.php");
	?>
			<div class="graph" style="width:90%;margin-top: 5%;margin-left: 6%">
			<?php
				$uname=$_SESSION['uname'];
				$obj=new control();
				$rr=$obj->friendlist1($uname);
			
				$num=mysqli_num_rows($rr);
				if($num!=0)
				{
					while($fe=mysqli_fetch_array($rr))
					{
						
						$fname=$fe['f_name'];
						$block=$fe['bloack'];
						$fid=$fe['id'];
						$obj=new control();
						$t=$obj->seefriendprofile($fname);
						$numd=mysqli_num_rows($t);
						
						if($numd!=0)
						{
							while($fey=mysqli_fetch_array($t))
							{
								$fnamep=$fey['fname'];
								$lname=$fey['lname'];
								$image=$fey['image'];
								?>
											
																	
								<div class="tables" style="width: 50%;margin-left: 26%">

								<table class="table table-bordered">

								<tbody> 
								<tr>

								<td width="10%"><div><img height="100px" src="<?php echo $fey['image']?>" /></div></td>
								<td>
								<font size="5px">
								<form method="get">
								<a href="profile.php?uname=<?php echo $fey['uname']?>"><h4 style="font-family: 'Ubuntu', sans-serif;"><?php echo $fey['fname'].' '.$fey['lname'];?></a>
								</form>
								</font>
								<br>
								
								
								<?php
									if($block==1)
									{
								?>
								<form method="post">
								   <input type="hidden" name="fid" value="<?php echo $fid ?>">
									
									<button class="btn btn-primary" style="float:center" name="bb">Block</button>

								</form>
									
								<?php
									}
									else
									{
										?>
										<form method="post" action="unb.php">
										<input type="hidden" name="funame1" value="<?php echo $fid ?>">
										<button class="btn btn-primary" style="float:center" name="unb">Un-Block</button>
										</form>
										
										<?php
									}
								?>
								
								</td>



								</tr>

								</tbody> 

								</table>

								</div>

								</form>
									
								<?php
							}
						}
					}
				}
				else
				{
					?>
					<h1 style="color: black">No Friends Is Blocked</h1>
					<?php
				}
			?>
	</div>
</body>
</html>
<?php
	if(isset($_REQUEST['unb']))
	{
		
		
	}
	if(isset($_REQUEST['bb']))
	{
	    $funame=$_POST['fid'];
		$obj=new control();
		$obj->blockfriendlist($funame);
	}
?>