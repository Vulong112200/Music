

<!-- Sidebar on click -->
<!-- Navbar -->
<?php 
	include "app/controllers/nav.php"
?>

  <!-- Navbar on small screens -->
  
  <div class="w3-main" >
   <?php
	  foreach($data as $value){
	  ?>

<div class="row-top">
	<div class="container">
  <div class="column-top" >
    <h3 style="margin-top:15%;"><?php echo $value["tenCS"]?></h3>
    <p>Quốc gia: <?php echo $value["Quocgia"]?></p>
  </div>
  <div class="column-top" >
          <img src="<?php echo $value["Anh"] ?>" alt="hình ca sĩ">
  </div>
</div>
	</div>
	  <?php } ?>
<div class="container">
    <h2></h2>
    <br>
    <ul class="nav nav-tabs">
      <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#home" ><strong>Tổng quan</strong></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#menu1"><strong>Bài hát</strong></a>
      </li>
		<li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#menu3"><strong>MV</strong></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#menu2"><strong>Giới thiệu</strong></a>
      </li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <div id="home" class="container tab-pane active"><br>
        <h3>Tổng quan</h3>
        <h4>Bài hát nổi bật</h4>
        <div class="w3-content w3-display-container">
		<?php
			 foreach($data as $value ){
	  $data7 = $this->Model->fetch("select * from song where maCS=".$value["maCS"]);
		foreach($data7 as $key){
	?>
<div class="w3-display-container mySlides">
	 <a href="index.php?controller=song/detail&id=<?php echo $key["maBH"] ?>">
  <img src="<?php echo $key["Anh"]?>" alt="<?php echo $key["tenBH"]?>" style="width:100%;height:400px">
  <div class="w3-display-bottommiddle w3-large w3-container w3-padding-16 w3-text-white w3-black">
	  <h4><?php echo $key["tenBH"]?></h4>
  </div></a>
</div>
<?php }}?>
<div class="w3-button w3-display-left w3-black" onclick="plusDivs(-1)">&#10094;</div>
<div class="w3-button w3-display-right w3-black" onclick="plusDivs(1)">&#10095;</div>
</div>

		  <hr>
        <h4> Single</h4> 
		  <div class="container">
			  <div class="swiper-container">
    			<div class="swiper-wrapper">
		  <?php
		  foreach($data as $value ){
	  $data8 = $this->Model->fetch("select * from song where maCS =".$value["maCS"]);
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
				 <a href="index.php?controller=song/detail&id=<?php echo $key["maBH"] ?>"><?php echo $key["tenBH"]?></a>
			</div>
		     </div>
		  <?php }}?>
		</div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
  </div>
		  <hr>
            <h4>MV</h4>  
		  <div class="container">
			  <div class="swiper-container">
    			<div class="swiper-wrapper">
		    <?php
		    foreach($data as $value ){
	  $data8 = $this->Model->fetch("select * from mv where maCS =".$value["maCS"]);
		foreach($data8 as $key){
	?>
           <div class="swiper-slide">
               <div class="single-square">
           	<div class="profile-pic">
				<a href="index.php?controller=mv/detail&id=<?php echo $key["maMV"] ?>">
				  <img src="<?php echo $key["Anh"] ?>" alt="meo">
				  <div class="img-btn">
				  <a href="index.php?controller=mv/detail&id=<?php echo $key["maMV"] ?>">
                    <i class="fa fa-play-circle fa-3x"></i>
				  </a>
				  </div></a>
	  		  </div>
				   <a href="index.php?controller=mv/detail&id=<?php echo $key["maMV"] ?>"><?php echo $key["tenMV"]?></a>
			  </div>
			  </div>

          
			<?php }}?>
          </div>
	<div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
          </div>
          </div>
		  
		   <hr>
             <h4>Nghệ sĩ liên quan</h4>  
		  <div class="container">
			  <div class="swiper-container">
    			<div class="swiper-wrapper">
		    <?php
				foreach($data as $value){
	  $data9 = $this->Model->fetch("select * from nghesi where Quocgia ='$Quocgia' and maCS!='$id' limit 10");
		foreach($data9 as $key){
	?>
           <div class="swiper-slide">
               <div class="single-square">
           	<div class="profile-pic">
				 <a href="index.php?controller=nghesi/detail&id=<?php echo $key["maCS"]?>&quocgia=<?php echo $key["Quocgia"]?>">
				  <img src="<?php echo $key["Anh"] ?>" alt="<?php echo $key["tenCS"]?>">
				  <div class="img-btn">
					<a href="index.php?controller=nghesi/detail&id=<?php echo $key["maCS"]?>&quocgia=<?php echo $key["Quocgia"]?>">
                    <i class="fa fa-play-circle fa-3x"></i>
				  </a>
				  </div></a>
	  		  </div>
				 <a href="index.php?controller=nghesi/detail&id=<?php echo $key["maCS"]?>&quocgia=<?php echo $key["Quocgia"]?>"><?php echo $key["tenCS"]?></a>
			  </div>
			  </div>
			<?php } }?>
          </div>
	<div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
          </div>
          </div>
	  </div>
		
		
      <div id="menu1" class="container tab-pane fade"><br>
        <h3>Bài hát</h3>
		  <center><audio src="" controls id="audioPlayer" style="margin-top:10px;">
        Sorry, your browser doesn't support html5!
    		</audio></center>
    <ol id="playlist" >
		<?php foreach($data as $value){ 
			  $data8 = $this->Model->fetch("select * from song where maCS =".$value["maCS"]);
		foreach($data8 as $key){
		?>
        <li class="current-song"><a href="<?php echo $key["link"]?>"><button>
            <span><img src="<?php echo $key["Anh"]?>" style="width:40px; height:40px; margin-left:5px;"></span>
            <?php echo $key["tenBH"]?>
			 <span style="position: absolute; right:35%;">
				 <?php
					echo $value["tenCS"];
				 ?>
			</span>
            <span style="position: absolute; right:15%;"><?php echo substr($value["dateTime"],0,10)?></span></button></a></li><?php }}?>
    </ol></div>
      
	
	
      <div id="menu2" class="container tab-pane fade"><br>
        <h3>Giới thiệu</h3>
        <?php foreach($data as $value){
		 echo $value["Gioithieu"];
			}?>
      </div>
		<div id="menu3" class="container tab-pane fade"><br>
        <h3>MV</h3>
		<div class="container">
        <?php
			foreach($data as $value){
		$data8 = $this->Model->fetch("select * from mv where maCS =".$value["maCS"]);
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
				 <a href="index.php?controller=mv/detail&id=<?php echo $key["maMV"]?>"><?php echo $key["tenMV"]?></a>
				</div><?php }} ?>
    	  </div>
		</div>
    </div>
  </div>
	<br>
	</div>
	
  
  <script>
    $(document).ready(function(){
      $(".nav-tabs a").click(function(){
        $(this).tab('show');
      });
    });
    </script>
	<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>
<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2500); // Change image every 2 seconds
}
</script>
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
	<script>
        audioPlayer();
    </script>