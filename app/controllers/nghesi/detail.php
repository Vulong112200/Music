<?php

	class DetailCS extends Controller{
		public function __construct(){
			parent::__construct();
			$id = isset($_GET["id"])?$_GET["id"]:0;
			$Quocgia= isset($_GET["quocgia"])?$_GET["quocgia"]:0;
			$data = $this->Model->fetch("select * from nghesi where maCS= '$id'");
			include "app/views/nghesi/detail.php";
		}
	}
	new DetailCS();

?>