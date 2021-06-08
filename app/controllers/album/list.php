<?php

	class ListAB extends Controller{
		public function __construct(){
			parent::__construct();

			$id = isset($_GET["id"])?$_GET["id"]:0;
			$data = $this->Model->fetch("select * from listbh where maAB= '$id'");
			include "app/views/album/list.php";

		}
	}
	new ListAB();

?>