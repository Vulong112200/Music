<?php

	class Nhactailen extends Controller{
		public function __construct(){
			parent::__construct();

			$id = isset($_GET["id"])?$_GET["id"]:"";
			
					$song = $this->Model->fetch("select * from songtl where id='$id'");
					$mv=$this->Model->fetch("select * from mvtl where id='$id'");

			include "app/views/nhactailen.php";
		}	
	}
	new Nhactailen();

?>