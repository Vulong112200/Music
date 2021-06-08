<?php

	class DetailCD extends Controller{
		public function __construct(){
			parent::__construct();
			$id = isset($_GET["id"])?$_GET["id"]:0;
			$data = $this->Model->fetch("select * from song where maBH= '$id'");
			include "app/views/chude/detail.php";
		}
	}
	new DetailCD();

?>