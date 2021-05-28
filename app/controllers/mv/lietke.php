<?php

	class LietkeMV extends Controller{
		public function __construct(){
			parent::__construct();			
			$data = $this->Model->fetch("select * from mv");
			include "app/views/mv/lietke.php";

		}
	}
	new LietkeMV();

?>