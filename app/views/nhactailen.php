
<?php 
	include "app/controllers/nav.php"
?>

  <!-- Navbar on small screens -->
  
  <div class="body" style="margin-top:150px;">
<div class="container mt-3">
    <h2></h2>
    <br>
    <ul class="nav nav-tabs">
      <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#home" ><strong>Bài hát</strong></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#menu1"><strong>MV</strong></a>
      </li>
     </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      
		  
      <div id="home" class="container tab-pane active"><br>
        <h3>Bài hát</h3>
		  <center><audio src="" controls id="audioPlayer" style="margin-top:10px;">
        Sorry, your browser doesn't support html5!
    		</audio></center>
    <ol id="playlist" >
		<?php foreach($song as $value){ 
		?>
        <li class="current-song"><a href="<?php echo $value["Link"]?>"><button>
            <span><img src="<?php echo $value["AnhBH"]?>" style="width:40px; height:40px; margin-left:5px;"></span>
            <?php echo $value["tenBH"]?>
			
            <span style="position: absolute; right:15%;"><?php echo substr($value["dateTime"],0,10)?></span></button></a></li><?php  }?>
    </ol></div>
      
	<div id="menu1" class="container tab-pane fade"><br>
        <h3>MV</h3>
		<div class="container">
			<?php
			foreach($mv as $value){
			?>
            <div class="mv">
			  <div class="profile-pic">
				  <a href="index.php?controller=mvtl/detail&mamv=<?php echo $value["maMV"]?>&id=<?php echo $_SESSION["id"]?>">
                <img src="<?php echo $value["AnhMV"]?>">
                <div class="img-btn">
					 <a href="index.php?controller=mvtl/detail&mamv=<?php echo $value["maMV"]?>&id=<?php echo $_SESSION["id"]?>">
                    <i class="fa fa-play-circle fa-3x"></i>
					</a>
				 </div>
					  </a>
            </div>
				<p><?php echo $value["tenMV"]?></p>
				</div><?php }?>
			

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