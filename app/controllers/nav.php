<?php
	
	class nav extends Controller{
		public function __construct(){
			parent::__construct();
			include "app/views/nav.php";
		}
	}
	new nav();

?>