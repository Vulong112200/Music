	<?php
	include "app/controllers/nav.php"
	?>
<div class="w3-main">
	<div class="mv-container">
	 	<div class="video">
		 <video controls>
 			 <source src="<?php echo $value["Link"]?>" type="video/mp4">
  				Your browser does not support HTML5 video.
		</video>

		</div>
		<br>
		<?php  $data8 = $this->Model->fetch("select * from nghesi where maCS =".$value["maCS"]);
		foreach($data8 as $key){?>
		<h2> <?php echo $value["tenMV"]?> -<a href="index.php?controller=nghesi/detail&id=<?php echo $key["maCS"] ?>"><?php echo $key["tenCS"]?></a></h2>
		<p>Tên ca sĩ:<a href="index.php?controller=nghesi/detail&id=<?php echo $key["maCS"] ?>"><?php echo $key["tenCS"]?></a></p><?php }?>
		<?php $data8 = $this->Model->fetch("select * from loaimv where maLMV =".$value["maLMV"]);
		foreach($data8 as $key){?>
		<p>Thể loại:<a href="index.php?controller=mv/list&id=<?php echo $key["maLMV"] ?>"><?php echo $key["tenLMV"]?></a></p><?php }?>
	</div>
	<hr>
	<div class ="sub-container">
		<h2>MV cùng ca sĩ</h2>
		<div class="swiper-container">
    	<div class="swiper-wrapper">
	 <?php
	  $data8 = $this->Model->fetch("select * from mv where maCS =".$value["maCS"]." and maMV !=".$value["maMV"]." limit 10");
		foreach($data8 as $key){
	?>
       <div class="swiper-slide">
            <div class="single-square">
			  <div class="profile-pic">
				  <a href="index.php?controller=mv/detail&id=<?php echo $key["maMV"] ?>">
                <img src="<?php echo $key["Anh"]?>">
                <div class="img-btn">
					 <a href="index.php?controller=mv/detail&id=<?php echo $key["maMV"] ?>">
                    <i class="fa fa-play-circle fa-3x"></i>
					</a>
			    </div>
					  </a>
            </div>
				<p><?php echo $key["tenMV"] ?></p>
			</div>
		     </div>
		  <?php }?>
		</div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
		<hr>
		<h2>MV cùng thể loại</h2>
		<div class="swiper-container">
    	<div class="swiper-wrapper">
	 <?php
	  $data8 = $this->Model->fetch("select * from mv where maLMV =".$value["maLMV"]." and maMV !=".$value["maMV"]." limit 10");
		foreach($data8 as $key){
	?>
       <div class="swiper-slide">
            <div class="single-square">
			  <div class="profile-pic">
				  <a href="index.php?controller=mv/detail&id=<?php echo $key["maMV"] ?>">
                <img src="<?php echo $key["Anh"]?>">
                <div class="img-btn">
					 <a href="index.php?controller=mv/detail&id=<?php echo $key["maMV"] ?>">
                    <i class="fa fa-play-circle fa-3x"></i>
					</a>
			    </div>
					  </a>
            </div>
				<p><?php echo $key["tenMV"] ?></p>
			</div>
		     </div>
		  <?php }?>
		</div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
	</div>
</div>
<script>
        // loads the audio player
        audioPlayer();
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
};
    </script>
		
	 <script>
  var swiper = new Swiper('.swiper-container', {
      slidesPerView: 4,
      spaceBetween: 20,
      slidesPerGroup: 4,
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
     	
</body>
</html>