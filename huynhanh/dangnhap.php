<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
<?php include_once"contenct.php";
if(isset($_GET["action"]))
{
		$sql="select * from dangnhap where tendn ";
		$username   = addslashes($_POST['tendn']);
		$password   = addslashes($_POST['pass']);
		$password = md5($password);
		$query = mysqli_query($conn,"SELECT tendn, pass FROM dangnhap WHERE tendn='$username'");
    if (mysqli_num_rows($query) == 0) {
        echo "Tên đăng nhập này không tồn tại. Vui lòng kiểm tra lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
     
    //Lấy mật khẩu trong database ra
    $row = mysqli_fetch_array($query);
     
    //So sánh 2 mật khẩu có trùng khớp hay không
    if ($password != $row['pass']) {
        echo "Mật khẩu không đúng. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
     
    //Lưu tên đăng nhập
    $_SESSION['tendn'] = $username;
    echo "Xin chào " . $username . ". Bạn đã đăng nhập thành công. <a href='index.php'>Về trang chủ</a>";
    die();
	
}
		
		 
		

?>
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
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<?php include'header.php';?>
 
<table width="100%" border="0">
  <tr>
		 <form action='dangnhap.php?action=do' method='POST'>
            <table cellpadding='0' cellspacing='0' border='1'>
			
                
                    <td>
                        Tên đăng nhập :
                    </td>
                    <td>
                        <input type='text' name='tendn' />
                    </td>
                </tr>
                <tr>
                    <td>
                        Mật khẩu :
                    </td>
                    <td>
                        <input type='password' name='pass' />
                    </td>
             
            </table>
            <input type='submit' value='Đăng nhập' />
          
        </form>
  </tr>
</table>
 
<?php include"footer.php"?>
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>