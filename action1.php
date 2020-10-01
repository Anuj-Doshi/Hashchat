<?php

	include("control.php");
	
	$code=substr(md5(mt_rand()),0,7);
	session_start();
	$email=$_SESSION['email'];
	$uname=$_POST['uname'];
		if ( $_FILES[ 'image_file' ][ 'error' ] > 0 ) 
		{
			echo 'Please Choose any Image ';
		}

		$extsAllowed = array( 'jpg', 'jpeg', 'png', 'gif' );

		$extUpload = strtolower( substr( strrchr( $_FILES[ 'image_file' ][ 'name' ], '.' ), 1 ) );


		if ( in_array( $extUpload, $extsAllowed ) )
		{

			$image = "Profile/{$_FILES['image_file']['name']}";

			$result = move_uploaded_file( $_FILES[ 'image_file' ][ 'tmp_name' ], $image );

		}
		$obj=new control();
		$obj->signupu($uname,$image,$code,$email);
?>