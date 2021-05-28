
<div class="top" id="top" style="transition:0.5s">
	<div class="logo">
		<div class="sub-container">
	<ul>
  <li style="width:200px;height:100px;"><a href="index.php">
	  <img src="public/images/nenho.png" style="width:170px;height:100px;"></a></li>
 		<li style="padding-left:90px;margin-bottom:10px;margin-top:30px;">
			<form action="index.php?controller=search&act=search" method="post" enctype="multipart/form-data">
  		<input type="search" name="search" placeholder="Search">
			</form>
		</li>
		</ul>
	</div>
		</div>
		
	<div class ="navigate">
	<div class="sub-container">
	<ul>
  	<li>
	    <a href="index.php?controller=song/moi">Mới phát hành</a>
	</li>
		<li>
			 <div class="dropdown">

    <button>Chủ đề 
    </button>
		
    <div class="dropdown-content">
      <div class="row">
        <div class="column">
		<h4 style="color:grey"><b>Đề xuất</b></h4>  
		<?php
		$data1 = $this->Model->fetch("select * from chude where loaiCD='Đề xuất'");
		foreach($data1 as $value){
		?>
          <a href="index.php?controller=chude/list&id=<?php echo $value["maCD"] ?>"><?php echo $value["tenCD"] ?></a>
		<?php } ?>
        </div>
		
        <div class="column ">
          <h4 style="color:grey"><b>Thể loại</b></h4>
          <?php
		$data2 = $this->Model->fetch("select * from chude where loaiCD='Thể loại'");
		foreach($data2 as $value){
		?>
          <a href="index.php?controller=chude/list&id=<?php echo $value["maCD"] ?>""><?php echo $value["tenCD"] ?></a>
		<?php } ?>
       		 </div>
		  <div class="column">
          <h4 style="color:grey"><b>Tâm trạng</b></h4>
          <?php
		$data3 = $this->Model->fetch("select * from chude where loaiCD='Tâm trạng'");
		foreach($data3 as $value){
		?>
          <a href="index.php?controller=chude/list&id=<?php echo $value["maCD"] ?>""><?php echo $value["tenCD"] ?></a>
		<?php } ?>
       		 </div>
	
		  </div>
      </div>
    </div>
		</li>
    	<li>
		<div class="dropdown">
    <a href="index.php?controller=mv/lietke">
    <button href="index.php?controller=mv/lietke">MV 
    </button></a>
    <div class="dropdown-content">
      <div class="row">
        <div class="column">
          <h4 style="color:grey"><b>Việt Nam</b></h4>
			<?php
		$data4 = $this->Model->fetch("select * from loaimv where Quocgia='Việt Nam'");
		foreach($data4 as $value){
		?>
          <a href="index.php?controller=mv/list&id=<?php echo $value["maLMV"] ?>"><?php echo $value["tenLMV"] ?></a>
		<?php } ?>
          

        </div>
        <div class="column">
          <h4 style="color:grey"><b>Âu Mỹ</b></h4>
          <?php
		$data5 = $this->Model->fetch("select * from loaimv where Quocgia='Âu Mỹ'");
		foreach($data5 as $value){
		?>
          <a href="index.php?controller=mv/list&id=<?php echo $value["maLMV"] ?>"><?php echo $value["tenLMV"] ?></a>
		<?php } ?>
       		 </div>
		  <div class="column">
          <h4 style="color:grey"><b>Châu Á</b></h4>
         <?php
		$data6 = $this->Model->fetch("select * from loaimv where Quocgia='Châu Á'");
		foreach($data6 as $value){
		?>
          <a href="index.php?controller=mv/list&id=<?php echo $value["maLMV"] ?>"><?php echo $value["tenLMV"] ?></a>
		<?php } ?>
		  </div>
		  </div>
      </div>
    </div>
	</li>
		<li>
			<div class="dropdown">
	<a href="index.php?controller=album/lietke">
    <button href="index.php?controller=album/lietke">Album 
    </button></a>
    <div class="dropdown-content">
      <div class="row">
        <div class="column">
          <h4 style="color:grey"><b>Việt Nam</b></h4>
			<?php
		$data4 = $this->Model->fetch("select * from album where Quocgia='Việt Nam'");
		foreach($data4 as $value){
		?>
          <a href="index.php?controller=album/list&id=<?php echo $value["maAB"] ?>"><?php echo $value["tenAB"] ?></a>
		<?php } ?>
          

        </div>
        <div class="column">
          <h4 style="color:grey"><b>Âu Mỹ</b></h4>
          <?php
		$data5 = $this->Model->fetch("select * from album where Quocgia='Âu Mỹ'");
		foreach($data5 as $value){
		?>
          <a href="index.php?controller=album/list&id=<?php echo $value["maAB"] ?>"><?php echo $value["tenAB"] ?></a>
		<?php } ?>
       		 </div>
		  <div class="column">
          <h4 style="color:grey"><b>Châu Á</b></h4>
         <?php
		$data6 = $this->Model->fetch("select * from album where Quocgia='Châu Á'");
		foreach($data6 as $value){
		?>
          <a href="index.php?controller=album/list&id=<?php echo $value["maAB"] ?>"><?php echo $value["tenAB"] ?></a>
		<?php } ?>
		  </div>
		  </div>
      </div>
    </div>
		</li>
		<li>
			<div class="dropdown">
  		<a href="index.php?controller=nghesi/lietke">
    <button href="index.php?controller=nghesi/lietke">Nghệ sĩ
    </button></a>
	  <div class="dropdown-content">
      <div class="row">
        <div class="column">
      <a href="index.php?controller=nghesi/list&quocgia=Việt Nam" >Việt Nam</a>
      <a href="index.php?controller=nghesi/list&quocgia=Âu Mỹ" >Âu Mỹ</a>
      <a href="index.php?controller=nghesi/list&quocgia=Châu Á">Châu Á</a>
			
    </div>
    </div>
    </div>
	</div>
		</li>
				 <?php
		if(isset($_SESSION["account"]))
		{
			echo  "<li style='float:right;'>
			 <div class='dropdown'>
    		<button><i class='fa fa-fw fa-user'></i>".$_SESSION["name"]."
				</button>
		
    	<div class='dropdown-content'>
		<div class='row'>
        <div class='column'>";
          
		if($_SESSION["Quyen"]!=0){
			echo " <a href='/Hoavu/Admin/index.php'><i class='fa fa-fw fa-user'></i>Trang Admin</a>";
		}
		else{
			echo " <a href='index.php?controller=tailen&id=".$_SESSION["id"]."'><i class='fa fa-fw fa-upload'></i>Tải lên</a>";
		}
			echo "<a href='index.php?act=logout'><i class='fa fa-fw fa-power-off'></i>Logout</a>
			</div>
		  </div>
      </div>
    </div>
		</li>";
		}
		else
		{
		echo "<li style='float:right;'>
			<a href='/Hoavu/Admin/index.php'><i class='fa fa-sign-in'></i> Đăng nhập</a>
		</li >
			<li style='float:right;'><a href='/Hoavu/Admin/index.php?controller=dangky'><i class='fa fa-user'></i> Đăng ký</a></li>"; } ?>
	</ul>
	</div>
</div>
</div>
	<script>
	var prevScrollpos = window.pageYOffset;
	window.onscroll = function() {
	var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("top").style.top = "0";
  } else {
    document.getElementById("top").style.top = "-100px";
  }
  prevScrollpos = currentScrollPos;
}
</script>