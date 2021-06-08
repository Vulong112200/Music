
	class DetailCD extends Controller{
			parent::__construct();
			$id = isset($_GET["id"])?$_GET["id"]:0;
			$data = $this->Model->fetch("select * from listbh where malist= '$id'");
		}
	}
	new DetailCD();

?>