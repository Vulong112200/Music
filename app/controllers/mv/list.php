<?php

	class ListMV extends Controller{
		public function __construct(){
			parent::__construct();

			$id = isset($_GET["id"])?$_GET["id"]:0;
			$data = $this->Model->fetch("select * from mv where maLMV= '$id'");
			include "app/views/mv/list.php";

		}
	}
	new ListMV();

?>