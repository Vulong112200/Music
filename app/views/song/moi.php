
<?php 
	include "app/controllers/nav.php";
?>
    <!---->
	<div class="w3-main" >
	<div class="sub-container">
		<img src="public/images/nhacmoi.jpg">
		<center><audio src="" controls id="audioPlayer" style="margin-top:10px;">
        Sorry, your browser doesn't support html5!
    		</audio></center>
    <ol id="playlist" >
		<?php foreach($data as $value){ 
		?>
        <li class="current-song"><a href="<?php echo $value["link"]?>"><button>
            <span><img src="<?php echo $value["Anh"]?>" style="width:40px; height:40px; margin-left:5px;"></span>
            <?php echo $value["tenBH"]?>
			 <span style="position: absolute; right:40%;">
				 <?php
			$nghesi = $this->Model->fetchOne("select * from nghesi where maCS=".$value["maCS"]);
				if(isset($nghesi["maCS"]))
					echo $nghesi["tenCS"];
				 ?>
			</span>
            <span style="position: absolute; right:20%;"><?php echo substr($value["dateTime"],0,10)?></span></button></a></li><?php }?>
    </ol>
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