<?php

	class DetailMV extends Controller{
		public function __construct(){
			parent::__construct();
			$id = isset($_GET["id"])?$_GET["id"]:0;
			$mamv = isset($_GET["mamv"])?$_GET["mamv"]:0;
			$value = $this->Model->fetchOne("select * from mvtl  where maMV= '$mamv' and id= '$id'");
			include "app/views/mvtl/detail.php";
		}
	}
	new DetailMV();

?>