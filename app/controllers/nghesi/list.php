<?php

	class ListCS extends Controller{
		public function __construct(){
			parent::__construct();
			$id = isset($_GET["quocgia"])?$_GET["quocgia"]:0;
			
			if($id=="Châu Á")
			{
				$data = $this->Model->fetch("select * from nghesi where Quocgia= 'Hàn Quốc' or Quocgia='Trung Quốc'");
			}
			else{
				$data = $this->Model->fetch("select * from nghesi where Quocgia= '$id'");
			}
			include "app/views/nghesi/list.php";
		}
	}
	new ListCS();

?>