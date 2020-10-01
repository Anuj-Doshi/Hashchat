<?php
	class connnect
	{
		public function __construct()
		{
			$host="localhost";
			$user="root";
			$pass="";
			$db="hashchat";

			$this->con=mysqli_connect($host,$user,$pass,$db);
			
			
			
		}
	}
		
?>