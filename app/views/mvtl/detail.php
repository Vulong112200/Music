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
		</div>
	<hr>
	<div class ="sub-container">
		<h2>MV hay</h2>
		<div class="swiper-container">
    	<div class="swiper-wrapper">
	 <?php
	  $data8 = $this->Model->fetch("select * from mv limit 10");
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
				 <a href="index.php?controller=mv/detail&id=<?php echo $key["maMV"] ?>"><?php echo $key["tenMV"] ?></a>
			</div>
		     </div>
		  <?php }?>
		</div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
		<hr>
		<h2>Nghệ sĩ nổi bật</h2>
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