<?php
	include("model.php");
	class control
	{
		public function signup($fname,$lname,$email,$phno,$cou,$state,$city,$gender,$dob,$pass)
		{
			$obj=new model();
			$obj->signup($fname,$lname,$email,$phno,$cou,$state,$city,$gender,$dob,$pass);
		}
		public function signupu($uname,$image,$code,$email)
		{
			$obj=new model();
			$obj->signupu($uname,$image,$code,$email);
		}
		public function verify($code,$email)
		{
			$obj=new model();
			$obj->verify($code,$email);
		}
		public function login($uname,$passs)
		{
			$obj=new model();
			$obj->login($uname,$passs);
		}
		public function status($status,$uname)
		{
			$obj=new model();
			$obj->status($status,$uname);
		}
		public function image($status,$uname,$image)
		{
			$obj=new model();
			$obj->image($status,$uname,$image);
		}
		public function disp($uname)
		{
			$obj=new model();
			return $obj->disp($uname);
		}
		public function friend($uname)
		{
			$obj=new model();
			return $obj->friend($uname);
		}
        public function check($uname,$fname)
        {
            $obj=new model();
            return $obj->check($uname,$fname);
        }
		public function addfriend($uname,$funame)
		{
			$obj=new model();
			$obj->addfriend($uname,$funame);
		}
		public function delfriend($uname,$funame)
		{
			$obj=new model();
			$obj->delfriend($uname,$funame);
		}
		public function profile($uname)
		{
			$obj=new model();
			return $obj->profile($uname);
		}
		public function addfriendp($tu,$funamee)
		{
			$obj=new model();
			$obj->addfriendp($tu,$funamee);
		}
		public function checkp($uname,$tu)
        {
            $obj=new model();
            return $obj->checkp($uname,$tu);
        }
		public function check1($uname,$fname)
        {
            $obj=new model();
            return $obj->check1($uname,$fname);
        }
		public function blockfriend($funame)
		{
			$obj=new model();
			$obj->blockfriend($funame);
		}
		public function unblockfriend($funame)
		{
			$obj=new model();
			$obj->unblockfriend($funame);
		}
		public function cityfetch($uuname,$cou)
		{
			$obj=new model();
			return $obj->cityfetch($uuname,$cou);
		}
		public function statefetch($uuname,$st)
		{
			$obj=new model();
			return $obj->statefetch($uuname,$st);
		}
		public function cityyfetch($uuname,$ct)
		{
			$obj=new model();
			return $obj->cityyfetch($uuname,$ct);
		}
		public function seestatus($uname)
		{
			$obj=new model();
			return $obj->cityyfetch($uname,$ct);
		}
		public function changepstatus($uname,$cou)
		{
			$obj=new model();
			$obj->changepstatus($uname,$cou);
		}
		public function changeppstatus($uname,$cou)
		{
			$obj=new model();
			$obj->changeppstatus($uname,$cou);
		}
		public function changesstatus($uname,$cou)
		{
			$obj=new model();
			$obj->changesstatus($uname,$cou);
		}
		public function changessstatus($uname,$cou)
		{
			$obj=new model();
			$obj->changessstatus($uname,$cou);
		}
		public function changeistatus($uname,$cou)
		{
			$obj=new model();
			$obj->changeistatus($uname,$cou);
		}
		public function changeiistatus($uname,$cou)
		{
			$obj=new model();
			$obj->changeiistatus($uname,$cou);
		}
		public function changefstatus($uname,$cou)
		{
			$obj=new model();
			$obj->changefstatus($uname,$cou);
		}
		public function changeffstatus($uname,$cou)
		{
			$obj=new model();
			$obj->changeffstatus($uname,$cou);
		}
		public function seestatuss($uname)
		{
			$obj=new model();
			return $obj->seestatus($uname);
		}
		public function friendlist($uname)
		{
			$obj=new model();
			return $obj->friendlist($uname);
		}
		public function friendlist1($uname)
		{
			$obj=new model();
			return $obj->friendlist1($uname);
		}
		public function seefriendprofile($fname)
		{
			$obj=new model();
			return $obj->seefriendprofile($fname);
		}
		public function blockfriendlist($funame)
		{
			$obj=new model();
			$obj->blockfriendlist($funame);
		}
		public function delfriends($funame)
		{
			$obj=new model();
			$obj->delfriends($funame);
		}
		public function get($uname1)
		{
			$obj=new model();
			return $obj->get($uname1);
		}
		public function offline($uname)
		{
			$obj=new model();
			$obj->offline($uname);
		}
	}
?>