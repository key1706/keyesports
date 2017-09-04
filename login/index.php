<?php
//Khai báo sử dụng session
session_start();

//Khai báo utf-8 để hiển thị tiếng việt
header('Content-Type: text/html; charset=UTF-8');

//Xử lý đăng nhập
if (isset($_POST['index']))
{
    //kết nối
    include('ketnoi.php');

    //lấy dữ liệu đăng nhập
    $username = addslashes($_POST['txtUsername']);
    $password = addslashes($_POST['txtPassword']);

    //kiểm tra đã nhập đúng tên đăng nhập vào mật khẩu chưa
    if (!$username || !$password) {
        echo "Vui lòng Nhập Đầy đủ tên đăng nhập là mật khẩu. <a href='javascript: history.go(-1)'>Tr? l?i</a>";
        exit;
    }

    // mã hóa pasword
    $password = md5($password);

    //Kiểm tra tên đăng nhập có tồn tại không
    $query = mysql_query("SELECT * FROM users WHERE Username='$username'");
    if (mysql_num_rows($query) == 0) {
        echo "Tên dang nh?p này không t?n t?i. Vui lòng ki?m tra l?i. <a href='javascript: history.go(-1)'>Tr? l?i</a>";
        exit;
    }

    //Lấy mật khẩu trong database ra
    $row = mysql_fetch_array($query);

    //So sánh 2 mật khẩu có trùng khớp
    if ($password != $row['Password']) {
        echo "Mật khẩu không đúng. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Tr? l?i</a>";
        exit;
    }

    //Luu tên đăng nhập

//    $_SESSION['ChucVu']=$row['ChucVu'];
    $_SESSION['idUser']=$row['idUser'];
    $_SESSION['username'] = $username;
    header('Location:../admin ');
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Transparent Login Form Responsive Widget Template | Home :: w3layouts</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Transparent Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<!--web-fonts-->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css' />
<!--web-fonts-->
</head>

<body>
<!--header-->
	<div class="header-w3l">
		<h1> Đăng Nhập</h1>
	</div>
<!--//header-->

<!--main-->
<div class="main-content-agile">
	<div class="sub-main-w3">
		<form action='index.php?do=logi' method='POST'>
			<input placeholder="Username or E-mail" name='txtUsername' class="user" type="text" required=""><br>
			<input  placeholder="Password" name='txtPassword' class="pass" type="password" required=""><br>
            <input type="submit" name="index" value="">
		</form>

	</div>
</div>
<!--//main-->

<!--footer-->
<div class="footer">
	<p>&copy; 2017 Transparent Login Form. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
</div>
<!--//footer-->

</body>
</html>
