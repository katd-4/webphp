<?php include_once"contenct.php";?>
<!DOCTYPE html>
<!--
Template Name: Drywest
Author: <a href="https://www.os-templates.com/">OS Templates</a>
Author URI: https://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: https://www.os-templates.com/template-terms
-->
<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<title>Drywest</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top" >
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->


<?php include'header.php';?>
	
<table width="100%" border="0">
<tr><h1><a  href="index.php?<?php echo isset($_GET['loaisp'])?"loaisp=".$_GET['loaisp']:""?>&ss=asc">Tăng dần</a></h1></tr>
     <tr> <h1><a  href="index.php?<?php echo isset($_GET['loaisp'])?"loaisp=".$_GET['loaisp']:""?>&ss=desc">Giảm dần</a></h1></tr>
  	<?php 
		$sql="select * from product where gia>0 ";
		if (isset($_GET['loaisp']))
		{
			$sql=$sql." and loaisp='".$_GET['loaisp']."' ";
		}
	if (isset($_POST['key'])) 
		{
			$str = $_POST['key'];
			$str = str_replace("'","",$str);
			$sql=$sql." and tensp like '%".$str."%' ";
		}
		if (isset($_GET['ss']))
		{
			$sql=$sql." order by gia ".$_GET['ss']." ";
		}
		if (isset($_GET['masp']))
		{
			$sql=$sql." and masp='".$_GET['masp']."' ";
		}
		$ketqua=mysqli_query($conn,$sql);	
		$i=0;
		if (isset($ketqua)) {
 while (
$row = mysqli_fetch_assoc($ketqua))
 {
	 
	 $i++;
	 if ($i<7)
	 {
	 ?>
  <tr>
    <td><table width="100%" border="0">
  <tr>
    <p><?php echo isset($row['tensp'])?$row['tensp']:""?>.</p>
  </tr>
  <tr>
     <a href="#"><img src="images/demo/gallery/<?php echo isset($row['hinh'])?$row['hinh']:""?>" alt="ĐT" /></a>
  </tr>
  <tr>
   <p><?php echo isset($row['gia'])?$row['gia']:""?>.</p>
  </tr>
  
<div class="caption">



</table>
  <a > <p><?php echo isset($row['noidung'])?$row['noidung']:""?>.</p>
 <?php
	 }
		}
	 }
	 ?>
  </tr>
</td>

</table>
</div>
<?php include"footer.php"?>
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>