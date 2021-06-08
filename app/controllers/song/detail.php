<?php

	class DetailBH extends Controller{
		public function __construct(){
			parent::__construct();
			$id = isset($_GET["id"])?$_GET["id"]:0;
			$value = $this->Model->fetchOne("select * from song where maBH= '$id'");
			include "app/views/song/detail.php";
		}
	}
	new DetailBH();

?>