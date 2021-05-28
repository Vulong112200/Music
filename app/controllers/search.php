<?php

	class Search extends Controller{
		public function __construct(){
			parent::__construct();

			$act = isset($_GET["act"])?$_GET["act"]:"";
			switch ($act) {
				case 'search':
					
					$search = $_POST["search"];
					$song = $this->Model->fetch("select * from song where tenBH like '%$search%'");
					$mv=$this->Model->fetch("select * from mv where tenMV like '%$search%'");
					$album=$this->Model->fetch("select * from listbh where tenList like '%$search%'");
					$nghesi=$this->Model->fetch("select * from nghesi where tenCS like '%$search%'");
			}

			include "app/views/search.php";
		}	
	}
	new Search();

?>