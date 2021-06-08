<?php
	class homeClient extends Controller{
		public function __construct(){
			parent::__construct();
			$data = $this->Model->fetch("select * from listbh order by maList asc limit 3");
			$_SESSION["title"]="Hoa Vũ - Trang chủ";
			include "app/views/Trangchu.php";
		}
	}
	new homeClient();
?>