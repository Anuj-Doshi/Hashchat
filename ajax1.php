<?php
$con=mysqli_connect("localhost","root","","hashchat");
session_start();
if(isset($_POST['done']))
{
    $comm=$_POST['comment'];
    $re=$_POST['remarks'];
    $uname=$_SESSION['uname'];
    
    $sq=mysqli_query($con,"insert into comment values ('','$comm','$uname','$re')");
    if($sq)
    {
        $sqg=mysqli_query($con,"select * from user where uname='$uname'");
        $numj=mysqli_num_rows($sqg);
        if($numj!=0)
        {
            while($feh1=mysqli_fetch_array($sqg)) 
            {
        ?>
        <div class="w3-container content">
  	 	       <br>
        	<img src="<?php echo $feh1['image']?>" class="w3-image w3-circle" style="width: 10%;float:left">
          	<h3 style="margin-left: 5%;"><?php echo $feh1['fname'].' '.$feh1['lname']?></h3>
			<p style="font-size: medium;"><?php  echo $feh['remarks'];?></p>
			
		</div>
        <?php
    }
    }
    
    }
    
}
if(isset($_POST['done1']))
{
    $comm=$_POST['comment'];
    $re=$_POST['remarks'];
    $uname=$_SESSION['uname'];
    
    $sq=mysqli_query($con,"insert into comment values ('','$comm','$uname','$re')");
    if($sq)
    {
               $sqg=mysqli_query($con,"select * from user where uname='$uname'");
               $numj=mysqli_num_rows($sqg);
               if($numj!=0)
               {
                    while($feh1=mysqli_fetch_array($sqg)) 
                    {
        ?>
        <div class="w3-container content">
  	 	       <br>
        	<img src="<?php echo $feh1['image']?>" class="w3-image w3-circle" style="width: 10%;float:left">
          	<h3 style="margin-left: 5%;"><?php echo $feh1['fname'].' '.$feh1['lname']?></h3>
			<p style="font-size: medium;"><?php  echo $feh['remarks'];?></p>
			
		</div>
        <?php
    }
    }
    }
    
}
?>