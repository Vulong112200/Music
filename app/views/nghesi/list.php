
<?php 
	include "app/controllers/nav.php"
	?>
  
  <div class="w3-main">
	 <center ><h4> <?php 
		if($id=="Việt Nam"){echo "Việt Nam";}
		else if($id=="Âu Mỹ"){echo "Âu Mỹ";}
		else{ echo "Châu Á";}
		 ?></h4></center>
        <div class="container">
			<?php
			foreach($data as $value){
			?>
            <div class="mv">
			  <div class="profile-pic">
				  <a href="index.php?controller=nghesi/detail&id=<?php echo $value["maCS"]?>&quocgia=<?php echo $value["Quocgia"]?>">
                <img src="<?php echo $value["Anh"]?>">
                <div class="img-btn">
					 <a href="index.php?controller=nghesi/detail&id=<?php echo $value["maCS"]?>&quocgia=<?php echo $value["Quocgia"]?>">
                    <i class="fa fa-play-circle fa-3x"></i>
					</a>
				 </div>
					  </a>
            </div>
				<a href="index.php?controller=nghesi/detail&id=<?php echo $value["maCS"]?>&quocgia=<?php echo $value["Quocgia"]?>"><?php echo $value["tenCS"]?></a>
				</div><?php }?>
            </div>
	  
            </div>

       