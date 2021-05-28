
	<?php 
include "app/controllers/nav.php";
 ?>
<div class="w3-main">
<div class="w3-container"  id="myDIV">
<div class="sub-container">
<button class="button">
<a href="index.php?controller=song/moi" id="moi">
<h2>Nhạc mới <span class="fa fa-chevron-right"></span></h2>
</a>
</button>	

<br>
	
<div class="w3-content w3-display-container">
<?php
	  $data7 = $this->Model->fetch("select * from song where moi !=0 order by maBH asc");
		$Stt=0;
		foreach($data7 as $value){
			$Stt++;
	?>
<div class="w3-display-container mySlides">
	 <a href="index.php?controller=song/detail&id=<?php echo $value["maBH"] ?>">
  <img src="<?php echo $value["Anh"]?>" alt="<?php echo $value["tenBH"]?>" style="width:100%">
  <div class="w3-display-bottommiddle w3-large w3-container w3-padding-16 w3-text-white content">
	  <h4><?php echo $value["tenBH"]?></h4>
  </div></a>
</div>
<?php }?>
<button class="prev" onclick="plusDivs(-1)">&#10094;</button>
<button class="next" onclick="plusDivs(1)">&#10095;</button>
</div>

<hr>
	<?php
	foreach($data as $value){
	?>
<button class="button">
  <a href="index.php?controller=album/detail&id=<?php echo $value["maList"] ?>">
<h2 ><?php echo $value["tenList"] ?> <span class="fa fa-chevron-right"></span>
</h2>
	</a>
</button>
	<div class="swiper-container">
    <div class="swiper-wrapper">
		<?php
	  $data8 = $this->Model->fetch("select * from song join list on song.maBH=list.maBH where list.maList=".$value["maList"]." order by list.maBH asc");
		foreach($data8 as $listsong){
	?>
      <div class="swiper-slide">
		 <div class="single-square">
           	<div class="profile-pic">
				<a href="index.php?controller=song/detail&id=<?php echo $listsong["maBH"] ?>">
				  <img src="<?php echo $listsong["Anh"] ?>" alt="<?php echo $listsong["tenBH"]?>">
				  <div class="img-btn">
				  <a href="index.php?controller=song/detail&id=<?php echo $listsong["maBH"] ?>">
                    <i class="fa fa-play-circle fa-3x"></i>
				  </a>
				  </div></a>
	  		  </div>
				 <a href="index.php?controller=song/detail&id=<?php echo $listsong["maBH"] ?>"><?php echo $listsong["tenBH"]?></a>
			  </div>
	  </div>
		<?php }?>
    </div>
    <!-- Add Pagination -->
  
    <!-- Add Arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div><?php }?>
<hr>
		<h3>MV hay</h3>
		<div class="container">
        <?php
		$data8 = $this->Model->fetch("select * from mv limit 20");
		foreach($data8 as $key){
			?>
            <div class="mv">
			  <div class="profile-pic">
				  <a href="index.php?controller=mv/detail&id=<?php echo $key["maMV"]?>">
                <img src="<?php echo $key["Anh"]?>">
                <div class="img-btn">
					 <a href="index.php?controller=mv/detail&id=<?php echo $key["maMV"]?>">
                    <i class="fa fa-play-circle fa-3x"></i>
					</a>
				 </div>
				</a>
            </div>
				<a href="index.php?controller=mv/detail&id=<?php echo $key["maMV"] ?>"><?php echo $key["tenMV"]?></a>
				</div><?php } ?>
      </div>
	
	<hr>
		
		<h3>Album trong tuần</h3>
		<div class="container">
        <?php
		$data8 = $this->Model->fetch("select * from listbh limit 20");
		foreach($data8 as $list){
			?>
            <div class="mv">
			  <div class="profile-pic">
				  <a href="index.php?controller=album/detail&id=<?php echo $list["maList"]?>">
                <img src="<?php echo $list["Anh"]?>">
                <div class="img-btn">
					 <a href="index.php?controller=album/detail&id=<?php echo $list["maList"]?>">
                    <i class="fa fa-play-circle fa-3x"></i>
					</a>
				 </div>
				</a>
            </div>
				 <a href="index.php?controller=album/detail&id=<?php echo $list["maList"] ?>"><?php echo $list["tenList"]?></a>
				</div><?php } ?>
      </div>
		
		<hr>
<h3>Nghệ sĩ nổi bật</h3>
	<div class="swiper-container">
    <div class="swiper-wrapper">
		<?php
	  $data8 = $this->Model->fetch("select * from nghesi limit 10");
		foreach($data8 as $casi){
	?>
      <div class="swiper-slide">
		 <div class="single-square">
           	<div class="profile-pic">
				<a href="index.php?controller=nghesi/detail&id=<?php echo $casi["maCS"] ?>">
				  <img src="<?php echo $casi["Anh"] ?>" alt="<?php echo $casi["tenCS"]?>">
				  <div class="img-btn">
				  <a href="index.php?controller=nghesi/detail&id=<?php echo $casi["maCS"] ?>">
                    <i class="fa fa-play-circle fa-3x"></i>
				  </a>
				  </div></a>
	  		  </div>
				 <a href="index.php?controller=nghesi/detail&id=<?php echo $casi["maCS"] ?>"><?php echo $casi["tenCS"]?></a>
			  </div>
	  </div>
		<?php }?>
    </div>
    <!-- Add Pagination -->
  
    <!-- Add Arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
	</div>
	</div>
	</div>
	<script>
    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 5,
      spaceBetween: 20,
      slidesPerGroup: 5,
      loop: true,
      loopFillGroupWithBlank: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,

      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  </script>