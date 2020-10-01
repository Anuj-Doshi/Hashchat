
<?php
	$con=mysqli_connect("localhost","root","","hashchat");
	session_start();
	$name=$_SESSION['uname'];
	if(isset($_REQUEST['done']))
	{
		
		$like=$_POST['like'];
		$sq1=mysqli_query($con,"select * from likes where sid='$like' and likes='$name'");
		$num=mysqli_num_rows($sq1);
		if($num==0)
		{
			$l=1;
			$sq=mysqli_query($con,"insert into likes values ('','$like','$name','','')");
			$d=mysqli_query($con,"insert into notification values ('','$name','$like','$l','')");
            if($sq)
            {
                $r1=mysqli_query($con,"select * from likes where sid='$like'");   
                $n1=mysqli_num_rows($r1);
                $sq11=mysqli_query($con,"select * from comment where sid='$like'");
                $nums11=mysqli_num_rows($sq11);
			?>
			<div id="div">
				<p style="float: left;"><?php  echo $n1.'   Likes and ';?></p>
                <p><?php echo '&nbsp'.$nums11.' Comment'?></p>
			</div>
			<?php
            }
		}
		else
		{
			$sq=mysqli_query($con,"delete from likes where sid='$like' and likes='$name'");
			$d=mysqli_query($con,"delete from notification where post='$like' and uname='$name'");
            if($sq)
            {
               $d=mysqli_query($con,"select * from likes where sid='$like'");
                $r5=mysqli_num_rows($d);   
                $sq12=mysqli_query($con,"select * from comment where sid='$like'");
                $nums12=mysqli_num_rows($sq12);         
    			?>
                
    			<div id="div">
    				<p style="float: left;"><?php echo $r5.'   Likes and ';?></p>
                     <p><?php echo '&nbsp'.$nums12.' Comment'?></p>
    			</div>
    			<?php    
            }
            
		}
		
	}
	if(isset($_POST['done2']))
	{
		$like=$_POST['like'];
		$sq=mysqli_query($con,"select * from likes where sid='$like'");
		$nums=mysqli_num_rows($sq);
		$sq1=mysqli_query($con,"select * from comment where sid='$like'");
        $nums1=mysqli_num_rows($sq1);
		?>
		<div id="div">
			<p style="float: left;"><?php  echo $nums.'   Likes  and  ';?></p>
            <p><?php echo '&nbsp'.$nums1.' Comment'?></p>
			
		</div>
		<?php
			
	}
	if(isset($_POST['done3']))
	{
		
		$like=$_POST['like'];
		$sq=mysqli_query($con,"delete from likes where sid='$like' and likes='$name'");
		?>
		<div id="div">
			<p><?php  echo $nums=mysqli_num_rows($sq);?></p>
			<button type="button" class="w3-button w3-theme-d1 w3-margin-bottom" id="sub"><i class="fa fa-thumbs-up"></i> &nbsp;Like</button> 
			
		</div>
		<?php
			
	}
    if(isset($_POST['done5']))
	{
		
		$comment=$_POST['comment'];
		$sq3=mysqli_query($con,"select * from comment where sid='$comment'");
        $numd=mysqli_num_rows($sq3);
        if($numd!=0)
        {
            
            while($feh=mysqli_fetch_array($sq3))
            {     
               $uname=$feh['comment'];
               $sqg=mysqli_query($con,"select * from user where uname='$uname'");
               $numj=mysqli_num_rows($sqg);
               if($numj!=0)
               {
                    while($feh1=mysqli_fetch_array($sqg)) 
                    {
               
		?>
         <div class="w3-container content modelData1">
  	 	       <br>
        	<img src="<?php echo $feh1['image']?>" class="w3-image w3-circle" style="width: 10%;float:left">
          	<a href="home.php?delcomment=<?php echo $feh['id']?>" style="float: right">&#9747;</a>
          	<h3 style="margin-left: 5%;"><?php echo $feh1['fname'].' '.$feh1['lname']?></h3>
			
			<p style="font-size: medium;"><?php  echo $feh['remarks'];?></p>
			
			
		</div>
        
        
		<?php
                    }
                   
                }
                
            }
             ?>
                    <div class="" style="height: 70px;margin-top: 10%;"> 
            <div><input type="text" style="color: black;width: 50%;float: left;margin-left: 15%;height: 40px;" placeholder="Write Comment..." id="addcomment">
            <input  type="hidden" value="<?php echo $comment?>"/>
            <input type="submit" name="comment" value="Comment" class="tab-button" style="margin-left: 2%;height: 40px;" onclick="addcomment1('<?php echo $comment?>')"/>
            </div>
        </div>
                    <?php
		}	
        else
        {
            
            ?>
            <div>
                <p>No Comment</p>            
            </div>
            ?>
            <form method="post">
                    <div class="" style="height: 70px;margin-top: 10%;"> 
            <div><input type="text" style="color: black;width: 50%;float: left;margin-left: 15%;height: 40px;" placeholder="Write Comment..." id="coj" />
            <input  type="hidden" value="<?php echo $comment?>"/>
            <input type="submit" name="comment" value="Comment" class="tab-button" style="margin-left: 2%;height: 40px;" onclick="addcomment('<?php echo $comment?>')"/>
            </div>
            </form>
        </div>
            <?php
        }
	}
    if(isset($_POST['done6']))
	{
		
		$comment=$_POST['comment'];
		$sq3=mysqli_query($con,"select * from comment where sid='$comment'");
        $numd=mysqli_num_rows($sq3);
        if($numd)
        {
            
            while($feh=mysqli_fetch_array($sq3))
            {     
		?>
		<div id="div">
			<p><?php  echo $feh['remarks'];?></p>
			
		</div>
		<?php
            }
		}	
	}
?>
<div class="">
  	 	      
			
</div>
<div class="modelData2">
  	 	      
			
</div>
<script>
    function addcomment(comment)
    {
        
        //var remarks = document.getElementsById("coj").value;   
        var remarks=document.getElementById("coj").value;
        
        	$.ajax(
			{
			 
				url:"ajax1.php",
				type:"post",
				data:{
					"done":1,
					"comment":comment,
                    "remarks":remarks
				},
				success:function(data)
				{	
				    location.reload();
					//$(".modelData1").html(data);
				
				}
			});
    }
    function addcomment1(comment)
    {
        
        //var remarks = document.getElementsById("coj").value;   
        var remarks=document.getElementById("addcomment").value;
        
        	$.ajax(
			{
			 
				url:"ajax1.php",
				type:"post",
				data:{
					"done1":1,
					"comment":comment,
                    "remarks":remarks
				},
				success:function(data)
				{
				    location.reload();
		          	//$(".modelData1").html(data);
				    
				}
			});
    }
</script>