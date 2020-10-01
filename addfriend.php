
<!doctype html>
<html>
<?php
	
	include("control.php");
	session_start();
	?>
<head>
<meta charset="utf-8">
<link rel="icon" href="IMAGE/icon.PNG">
<title>HashChat</title>

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
            margin-left:5%;

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
            margin-left:12%;

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
    <style>
/*the container must be positioned relative:*/
.custom-select {
  position: relative;
  font-family: Arial;
	color: black;
}

.select-selected {
  background-color: DodgerBlue;
}
/*style the arrow inside the select element:*/
.select-selected:after {
  position: absolute;
  content: "";
  top: 14px;
  right: 10px;
  width: 0;
  height: 0;
  border: 6px solid transparent;
  border-color: #fff transparent transparent transparent;
}
/*point the arrow upwards when the select box is open (active):*/
.select-selected.select-arrow-active:after {
  border-color: transparent transparent #fff transparent;
  top: 7px;
}
/*style the items (options), including the selected item:*/
.select-items div,.select-selected {
  color: #ffffff;
  padding: 8px 16px;
  border: 1px solid transparent;
  border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
  cursor: pointer;
  user-select: none;
}
/*style items (options):*/
.select-items {
  position: absolute;
  background-color: DodgerBlue;
  top: 100%;
  left: 0;
  right: 0;
  z-index: 99;
}
/*hide the items when the select box is closed:*/
.select-hide {
  display: none;
}
.select-items div:hover {
  background-color: rgba(0, 0, 0, 0.1);
}
</style>
</head>
<script>
	function a(str)
	{
		var abc;
		if(window.XMLHttpRequest)
		{
			
			abc = new XMLHttpRequest();
		}
		else
		{
			abc = new ActiveXObject("Microsoft.XMLHTTP");
		}
		
		abc.open("POST","getdata.php?cou="+str,true);
		abc.send();
		
		abc.onreadystatechange = function()
		{
		    if(abc.readyState==4)
			{
				document.getElementById("state").innerHTML=abc.responseText;
			}	
		}
		
	}
	
	function b(str)
	{
		var abc;
		if(window.XMLHttpRequest)
		{
			
			abc = new XMLHttpRequest();
		}
		else
		{
			abc = new ActiveXObject("Microsoft.XMLHTTP");
		}
		
		abc.open("POST","getdata.php?st="+str,true);
		abc.send();
		
		abc.onreadystatechange = function()
		{
		    if(abc.readyState==4)
			{
				document.getElementById("city").innerHTML=abc.responseText;
			}	
		}
		
	}
</script>
<body>
	<?php
		include("navigation.php");
		$uname=$_SESSION['uname'];
		
	?>
   <div style="margin-top: 5%;width: 100%;margin-left: 10.5%">
   		<form method="post" action="searchfrnd.php">
	  	<div style="float: left;color: black;">
		  	<select style="width: 280px;height: 40px" onchange="a(this.value)" name="country">
				<option value="0">Select Country</option>
				
                    <?php
						$sel = mysqli_query($con,"select * from country");
						while($fet = mysqli_fetch_array($sel))
						{ 
					?>
                    <option value="<?php echo $fet['cid']; ?>"><?php echo $fet['cname']; ?></option>
                    <?php
						}
					?>
			</select>
		</div>
		<div style="float:left;color: black;padding-left: 2%">
			<select style="width: 280px;height: 40px" id="state" onchange="b(this.value)" name="state">
				<option value="0">Select State</option>
			</select>
		</div>
		<div style="color: black;padding-left: 2%;float: left">
			<select style="width: 280px;height: 40px" id="city" name="city">
				<option value="0">Select City</option>
			</select>
		</div>
		<div style="padding-left: 2%;float: left">
			<input type="submit" value="Search" name="search" style="background-color: #009688; border: none;outline: none;cursor: pointer;padding: 8px 22px ;transition: 0.3s;font-size: 17px;">
		</div>
		</div>
   		</form>
    <div class="w3-container">
		
	<div style="width: 80%;margin-left: 7%;">

		
		
	<?php
		
		
		$obj=new control();
		$g=$obj->friend($uname);
			$num=mysqli_fetch_array($g);

		if($num!=0)
		{
			while($fe=mysqli_fetch_array($g))
			{
	?>
            <div class="w3-card-4" style="width:17%;height: 250px;background-color:white;padding-bottom: 1%;border-bottom-left-radius: 5px;border-bottom-right-radius: 5px;margin-left: 3%;margin-top: 6%;float: left">


                            <input type="hidden" name="funame" value="<?php echo $fe['uname'] ?>">
                        <div style="height: 60%">
                            <img src="<?php echo $fe['image']?>" class="w3-image" style="width: 100%;height: 100%;">
                        </div>
                    <?php $st=$fe['fst'];?>
					<form method="get">
                   	
                    <center><a href="profile.php?uname=<?php echo $fe['uname']?>"><h4 style="font-family: 'Ubuntu', sans-serif;"><?php echo $fe['fname'].' '.$fe['lname'];?></h4></center></button></a>
                    </form>
                   
                    <?php
                        $fname=$fe['uname'];
						
                        $obj=new control();
                        $f=$obj->check($uname,$fname);
						$ff=$obj->check1($uname,$fname);
                        $nums=mysqli_num_rows($f);
						$nums1=mysqli_num_rows($ff);
						if($nums1==0)
						{
							
                        if($nums==0)
                        {
                            ?>
                                    <form method="post">
                                    <input type="hidden" name="funame" value="<?php echo $fe['uname'] ?>">
                                    <button class="tab-button" name="add">Add Friend</button>
									</form>

                                    <?php

                        }
                        else
                        {
                            ?>
							<form method="post">
                           <input type="hidden" name="funame" value="<?php echo $fe['uname'] ?>">
                            <a class="tab-button-2">Request Send</a>
                            <button class="tab-button-3" name="del">Cancel</button>
                           	</form>
                        <?php
                        }
							}
						else
						{
							while($t=mysqli_fetch_array($ff))
							{
								if($t['bloack']==1)
								{
							?>
                                  	<form method="post">
                                   	<input type="hidden" value="<?php echo $t['id'];?>" name="fid">
                                    <button class="tab-button-4">Friends</button>
                                 
                                    <button class="tab-button-4" name="bb">Block</button>
                                    </form>
                                   <?php
                                 }
                                 else
                                 {
									 ?>
                              		<form method="post">
                              		<input type="hidden" value="<?php echo $t['id'];?>" name="fid1">
                               		<button class="tab-button-5" name="unb">Un-Block</button>
                                <?php
                                 }
								?>
									</form>

                                    <?php
							}
						}
                            ?>

            </div>

		</form>
		<?php
			}
		}
		?>
	</div>
    </div>
</body>

</html>
<?php


	if(isset($_REQUEST['add']))
	{
	    $funame=$_POST['funame'];
		$obj=new control();
		$obj->addfriend($uname,$funame);
	}
	if(isset($_REQUEST['del']))
	{
	    $funame=$_POST['funame'];
		$obj=new control();
		$obj->delfriend($uname,$funame);
	}
	if(isset($_REQUEST['bb']))
	{
	    $funame=$_POST['fid'];
		$obj=new control();
		$obj->blockfriend($funame);
	}
	if(isset($_REQUEST['unb']))
	{
	    $funame=$_POST['fid1'];
		$obj=new control();
		$obj->unblockfriend($funame);
	}
?>