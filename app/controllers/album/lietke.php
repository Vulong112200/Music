<?php

	class LietkeAB extends Controller{
		public function __construct(){
			parent::__construct();			
			$data = $this->Model->fetch("select * from listbh");
			include "app/views/album/lietke.php";

		}
	}
	new LietkeAB();

?>