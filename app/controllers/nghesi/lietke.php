<?php

	class LietkeNS extends Controller{
		public function __construct(){
			parent::__construct();			
			$data = $this->Model->fetch("select * from nghesi");
			include "app/views/nghesi/lietke.php";

		}
	}
	new LietkeNS();

?>