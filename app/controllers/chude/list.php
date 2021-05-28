<?php

	class ListCD extends Controller{
		public function __construct(){
			parent::__construct();

			$id = isset($_GET["id"])?$_GET["id"]:0;
			$data = $this->Model->fetch("select * from song where maCD= '$id'");
			include "app/views/chude/list.php";

		}
	}
	new ListCD();

?>