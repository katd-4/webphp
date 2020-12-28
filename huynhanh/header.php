<?php include_once"contenct.php";?>

<div class="wrapper row0">


  <div id="topbar" class="hoc clear"> 
    <!-- ################################################################################################ -->
  
	<ul>
	
     <li><h1><a href="#" ><strong> Shop Giày Nam </strong></a></h1></li>
	   <li>
		 <form action="index.php" class="navbar-form navbar-right" role="search" method="POST">
            <input type="text" name="key" placeholder="Nhập sản phẩm..." class="form-control"><button type="submit" class="btn btn-primary"> tìm kiếm </button>
			
         </form>
		</li>
		

            <li><h1><a href="dangky.php" >Đăng Ký</a></h1></li>	  
			<li><h1><a href="dangnhap.php" >Đăng Nhập</a></h1></li>
			
				
				
    </ul>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <header id="header" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left">
      <h1><a href="index.php">Shoes Store</a></h1>
    </div>
    <div class="fl_right"><a class="btn" href="index.php">HOME PAGE</a></div>
    <!-- ################################################################################################ -->
  </header>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div class="bgded" style="background-image:url('images/demo/backgrounds/01.png');"> 
  <!-- ################################################################################################ -->
  <div class="wrapper row2">
  
  
      <!-- ################################################################################################ -->
    <nav id="mainav" class="hoc clear"> 
	
      <!-- ################################################################################################ -->
      <ul class="clear">
        <li class="active"><h1><a href="index.php">Trang Chủ</a></h1></li>
        <li><h1><a class="drop" href="#">Sản Phẩm</a></h1>
		
          <ul>
		  <?php
		  $ketqua=mysqli_query($conn,"select * from category");	
		if (isset($ketqua)) {
 while (
$row = mysqli_fetch_assoc($ketqua))
 {?>
            <li><a href="index.php?loaisp=<?php echo $row['loaisp']?>"><?php echo $row['tenloaisp']?></a></li>
		<?php }
		}
	?>
          </ul>
        </li>
        
      </ul>
      <!-- ################################################################################################ -->
    </nav>
  </div>