<?php
	
	class moi extends Controller{
		public function __construct(){
			parent::__construct();
			$data = $this->Model->fetch("select * from song where moi!=0 ");
			$_SESSION["title"]="Hoa Vũ - Trang nhạc";
			include "app/views/song/moi.php";
		}
	}
	new moi();

?>