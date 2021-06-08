
<?php 
	include "app/controllers/nav.php"
?>

  <!-- Navbar on small screens -->
  
   <div class="w3-main" >
	   <center><h3>Tải lên</h3></center>
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
		  <div class="panel-body">
			<form action="index.php?controller=tailen&act=addbh&id=<?php echo $_SESSION["id"] ?>" method="post" enctype="multipart/form-data">
				<table cellpadding="3" style="width: 100%;">
					<tr>
						<th width="10%">Tên bài nhạc</th>
						<td width="90%">
							<input type="text" name="name" placeholder="Tên bài nhạc" class="form-control" required>
						</td>
					</tr>
					<!-- upload image -->
					<tr>
						<th>Ảnh</th>
						<td>
							<input type="file" name="image" style="padding-top: 10px;">
						</td>
					</tr>
					<tr>
						<th>Link nhạc</th>
						<td>
							<input type="file" name="song" style="padding-top: 10px;">
						</td>
					</tr>
				</table>
				<center>
				<input type="submit" class="btn btn-primary" value="Thêm nhạc" style="margin-top: 10px;">
				</center>
			</form>
		</div>
      </div>
		
	<div id="menu1" class="container tab-pane fade"><br>
        <h3>MV</h3>
		<div class="panel-body">
			<form action="index.php?controller=tailen&act=addmv&id=<?php echo $_SESSION["id"] ?>" method="post" enctype="multipart/form-data">
				<table cellpadding="3" style="width: 100%">
					<tr>
						<th width="10%">Tên MV</th>
						<td width="90%">
							<input type="text" name="name" placeholder="Tên MV" class="form-control" required>
						</td>
					</tr>
					<!-- upload image -->
					<tr>
						<th>Ảnh</th>
						<td>
							<input type="file" name="image" style="padding-top: 10px;">
						</td>
					</tr>
					<tr>
						<th>Link MV</th>
						<td>
							<input type="file" name="mv" style="padding-top: 10px;" required>
						</td>
					</tr>
				</table>
				<center>
				<input type="submit" class="btn btn-primary" value="Thêm MV" style="margin-top: 10px;">
			</center>
			</form>
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