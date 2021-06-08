<?php

	class DetailMV extends Controller{
		public function __construct(){
			parent::__construct();
			$id = isset($_GET["id"])?$_GET["id"]:0;
			$value = $this->Model->fetchOne("select * from mv where maMV= '$id'");
			include "app/views/mv/detail.php";
		}
	}
	new DetailMV();

?>