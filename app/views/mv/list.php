<?php 
	include "app/controllers/nav.php"
?>
  <div class="w3-main" >
	 <center ><h4><?php 
		$loaimv = $this->Model->fetchOne("select * from loaimv where maLMV=".$id);
				if(isset($loaimv["maLMV"]))
					echo $loaimv["tenLMV"];
		 ?></h4></center>
        <div class="container">
			
            <?php
			foreach($data as $value){
			?>
            <div class="mv">
			  <div class="profile-pic">
				  <a href="index.php?controller=mv/detail&id=<?php echo $value["maMV"]?>">
                <img src="<?php echo $value["Anh"]?>">
                <div class="img-btn">
					 <a href="index.php?controller=mv/detail&id=<?php echo $value["maMV"]?>">
                    <i class="fa fa-play-circle fa-3x"></i>
					</a>
				 </div>
					  </a>
            </div>
			<a href="index.php?controller=mv/detail&id=<?php echo $value["maMV"]?>"><?php echo $value["tenMV"]?></a>
				</div><?php }?>
            </div>
          </div>