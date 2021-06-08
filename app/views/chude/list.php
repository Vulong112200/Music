
<?php 
	include "app/controllers/nav.php"
	?>
  
  <div class="w3-main">
	<center ><h4> <?php 
		$chude = $this->Model->fetchOne("select * from chude where maCD=".$id);
				if(isset($chude["maCD"]))
					echo $chude["tenCD"];
		 ?></h4></center>
        <div class="container">
			
            <?php
			foreach($data as $value){
			?>
            <div class="mv">
			  <div class="profile-pic">
				  <a href="index.php?controller=chude/detail&id=<?php echo $value["maBH"]?>">
                <img src="<?php echo $value["Anh"]?>">
                <div class="img-btn">
					 <a href="index.php?controller=chude/detail&id=<?php echo $value["maBH"]?>">
                    <i class="fa fa-play-circle fa-3x"></i>
					</a>
				 </div>
					  </a>
            </div>
				 <a href="index.php?controller=chude/detail&id=<?php echo $value["maBH"]?>"><?php echo $value["tenBH"]?></a>
				</div><?php }?>
            </div>
	  <br>
          </div>
 
	