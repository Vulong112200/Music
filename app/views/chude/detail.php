<?php 
	include "app/controllers/nav.php";
?>
<style>
	
</style>
		<div class="w3-main" >
		<div class="w3-container">
		<div class="sub-container">
		<?php
		foreach($data as $value){
		?>
			<div class="slide-left">
			<div class="pic">
		<img class="w3-spin w3-circle" style=" animation-duration: 4.5s;" src="<?php echo $value["Anh"] ?>" alt="music-playlist">
			</div>
				<center><h2><?php echo $value["tenBH"]?></h2></center>
				<audio src="" controls id="audioPlayer">
        Sorry, your browser doesn't support html5!
    		</audio>
				</div>
		<?php }?>
			<div class="slide-right">
				<h2>
<b><span style="color:#090F9B; font-size: x-large;;"><center>Danh sách nhạc</center></span></b></h2>
				
    <ol id="playlist">
		<?php
		foreach($data as $value){
		?>
        <li class="current-song"><a href="<?php echo $value["link"]?>"><button>
            <span><img src="<?php echo $value["Anh"]?>" style="width:40px; height:40px; margin-left:5px;"></span>
            <?php echo $value["tenBH"]?>
			 <span style="position: absolute; right:35%;">
				 <?php
			$nghesi = $this->Model->fetchOne("select * from nghesi where maCS=".$value["maCS"]);
				if(isset($nghesi["maCS"]))
					echo $nghesi["tenCS"];
				 ?>
			</span>
            <span style="position: absolute; right:15%;"><?php echo substr($value["dateTime"],0,10)?></span></button></a></li><?php }?>
    </ol>

		<hr>
<h2>Bài hát cùng chủ đề</h2>
	<div class="swiper-container">
    <div class="swiper-wrapper">
	 <?php
		  foreach($data as $value ){
	  $data8 = $this->Model->fetch("select * from song where maCD =".$value["maCD"]." and maBH !=".$value["maBH"]." limit 10");
		foreach($data8 as $key){
	?>
       <div class="swiper-slide">
            <div class="single-square">
			  <div class="profile-pic">
				  <a href="index.php?controller=song/detail&id=<?php echo $key["maBH"] ?>">
                <img src="<?php echo $key["Anh"]?>">
                <div class="img-btn">
					 <a href="index.php?controller=song/detail&id=<?php echo $key["maBH"] ?>">
                    <i class="fa fa-play-circle fa-3x"></i>
					</a>
			    </div>
					  </a>
            </div>
				<p><?php echo $key["tenBH"] ?></p>
			</div>
		     </div>
		  <?php }}?>
		</div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
<hr>	
<div>
<h2>Nhạc mới phát hành</h2>
	<div class="swiper-container">
    <div class="swiper-wrapper">
		<?php
	  $data8 = $this->Model->fetch("select * from song where moi != 0 limit 10");
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
		 <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
</div>	
</div>
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
