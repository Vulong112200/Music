<?php

	class Tailen extends Controller{
		public function __construct(){
			parent::__construct();

			$id = isset($_GET["id"])?$_GET["id"]:"";
			$act = isset($_GET["act"])?$_GET["act"]:"";
			switch ($act) {
				case 'addbh':
					$name = $_POST["name"];
				
					if($_FILES["image"]["name"]){
						$image = "public/images/Bài hát-MV/".time().$_FILES["image"]["name"];
						move_uploaded_file($_FILES["image"]["tmp_name"], "public/images/Bài hát-MV/".time().$_FILES["image"]["name"]);
					}
					if($_FILES["song"]["name"]){
						$link = "public/music/".time().$_FILES["song"]["name"];
						move_uploaded_file($_FILES["song"]["tmp_name"], "public/music/".time().$_FILES["song"]["name"]);
					}
	

					$this->Model->execute("insert into songtl(AnhBH, id, tenBH, Link) values('$image','$id','$name', '$link')");

					echo "<meta http-equiv='refresh' content='0; URL=index.php?controller=tailen'>";
					break;
				case 'addmv':
					$name = $_POST["name"];
					
					
					if($_FILES["image"]["name"]){
						$image = "public/images/Bài hát-MV/".time().$_FILES["image"]["name"];
						move_uploaded_file($_FILES["image"]["tmp_name"], "public/images/Bài hát-MV/".time().$_FILES["image"]["name"]);
					}
					if($_FILES["mv"]["name"]){
						$link = "public/mv/".time().$_FILES["mv"]["name"];
						move_uploaded_file($_FILES["mv"]["tmp_name"], "public/mv/".time().$_FILES["mv"]["name"]);
					}

					$this->Model->execute("insert into mvtl(AnhMV, id, tenMV, Link) values('$image','$id','$name', '$link')");

					echo "<meta http-equiv='refresh' content='0; URL=index.php?controller=tailen'>";
					break;	
			}

			include "app/views/tailen.php";
		}	
	}
	new Tailen();

?>