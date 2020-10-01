<?php
	include("model1.php");
	class control1
	{
		public function friendssee1($f_uname)
		{
			$obj=new model1();
			return $obj->friendssee1($f_uname);
		}
		public function friendssee($uname)
		{
			$obj=new model1();
			return $obj->friendssee($uname);
		}
		public function dfriend($f_uname)
		{
			$obj=new model1();
			$obj->dfriend($f_uname);
		}
		
		public function addfriend($f_uname,$uname)
		{
			$obj=new model1();
			$obj->addfriend($f_uname,$uname);
		}
	}
?>