<?php
if(!isset($_SESSION)) session_start();
	class Settings{
		
		public $sitename;
		public $domainname;
		public $titlename;
		public $logo;
		public $subtitle;
		public $metacontent;
		public $metakeyword;
		public $searchbuttoncap;
		public $address;
		public $email;
		public $phone;
		public $website;
		public $fax;
		
		public function assignSettings($s,$con){			
			$qry = "select * from setting"; 
			$res = mysqli_query($con,$qry);
			$row = mysqli_fetch_assoc($res);
			$s->sitename = $row['sitename'];
			$s->domainname = $row['domainname'];	
			return $s;		
		}
	}
?>