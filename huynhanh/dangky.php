<?php include_once"contenct.php";
if(isset($_GET["action"]))
{
		$sql="select * from dangnhap where tendn ";
		$username   = addslashes($_POST['tendn']);
		$password   = addslashes($_POST['pass']);
		$email      = addslashes($_POST['email']);
		$fullname   = addslashes($_POST['hoten']);
		$password = md5($password);
		if (mysqli_num_rows(mysqli_query($conn,"SELECT tendn FROM dangnhap WHERE tendn='$username'")) > 0){
        echo "Tên đăng nhập này đã có người dùng. Vui lòng chọn tên đăng nhập khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
		}
		
		
	else
	{
		@$addmember = mysqli_query($conn,"
        INSERT INTO dangnhap (
            tendn,
            pass,
            email,
            hoten
			
           
        )
        VALUE (
            '{$username}',
            '{$password}',
            '{$email}',
            '{$fullname}'
            
        )
    ");
	
	 if ($addmember)
        echo "Quá trình đăng ký thành công. <a href='index.php'>Về trang chủ</a>";
    else
        echo "Có lỗi xảy ra trong quá trình đăng ký. <a href='dangky.php'>Thử lại</a>";
	}
		
		 
		
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
 
		 <form action="dangky.php?action=do" method="POST">
            <table cellpadding="0" cellspacing="0" border="1">
                <tr>
                    <td>
                        Tênđăngnhập: 
                    </td>
                    <td>
                        <input type="text" name="tendn" size="50" />
                    </td>
                </tr>
                <tr>
                    <td>
                        Mậtkhẩu:
                    </td>
                    <td>
                        <input type="password" name="pass" size="50" />
                    </td>
                </tr>
                <tr>
                    <td>
                        Email:
                    </td>
                    <td>
                        <input type="email" name="email" size="50" />
                    </td>
                </tr>
                <tr>
                    <td>
                        Họvàtên:
                    </td>
                    <td>
                        <input type="text" name="hoten" size="50" />
                    </td>
                </tr>             
            </table>
            <input type="submit" value="Đăng ký" />
            <input type="reset" value="Nhập lại" />
        </form>
 
<?php include"footer.php"?>
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>