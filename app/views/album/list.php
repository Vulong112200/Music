<?php 
	include "app/controllers/nav.php"
	?>
  
  <div class="w3-main" >
	<center ><h4> <?php 
		$album = $this->Model->fetchOne("select * from album where maAB=".$id);
				if(isset($album["maAB"]))
					echo $album["tenAB"];
		 ?></h4></center>
        <div class="container">
			
            <?php
			foreach($data as $value){
			?>
            <div class="mv">
			  <div class="profile-pic">
				  <a href="index.php?controller=album/detail&id=<?php echo $value["maList"]?>">
                <img src="<?php echo $value["Anh"]?>">
                <div class="img-btn">
					 <a href="index.php?controller=album/detail&id=<?php echo $value["maList"]?>">
                    <i class="fa fa-play-circle fa-3x"></i>
					</a>
				 </div>
					  </a>
            </div>
				 <a href="index.php?controller=album/detail&id=<?php echo $value["maList"]?>"><?php echo $value["tenList"]?></a>
				</div><?php }?>
            </div>
	  <br>
          </div>