<?php
    require "lib/dbCon.php";
    if(isset($_GET["p"]))
        $p=$_GET["p"];
    else
        $p="";
?>
<!DOCTYPE HTML>
<html>

<head>
	<title>key esports</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Trendy Blog Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- Custom Theme files -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- js -->
	<script src="js/jquery-1.11.1.min.js"></script>
	<!-- //js -->
	<link href='//fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
</head>

<body>
	<!-- banner -->
    <?php
        switch($p){
            case "single": require "page/banner1.php"; break;
            case "chitiettin": require "page/banner1.php"; break;
            case "tinvideo": require "page/banner1.php"; break;
            default: require "page/banner.php";
        }
    ?>
	<!-- banner -->
	<!-- banner-bottom -->
	<div class="banner-bottom" style="BACKGROUND-COLOR: rgba(17, 17, 17, 0.04);">
		<div class="container" style="BACKGROUND-COLOR: white;">
			<!-- Tin hot chạy chữ -->
            <?php
                require "block/tinhotchaychu.php";
            ?>
			<!-- end Tin hot chạy chữ -->
			<!-- trang chính-->
            <?php
                switch ($p){
                    case "single": require "page/single.php"; break;
                    CASE "chitiettin": require  "page/chitiettin.php"; break;
                    case "tinvideo": require "page/tinvideo.php"; break;
                    default: require "page/trangchinh.php";
                }
            ?>
			<!-- trang chính -->
		</div>
	</div>

	<!-- //banner-bottom -->
	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="footer-grids wthree-agile">
				<div class="col-md-4 footer-grid-left">
					<h3>Thông tin</h3>
					<ul>
						<li><a href="#">Liên hệ với chúng tôi qua số điện thoại:
							<i>0971716896</i></a>
							<li><a href="mailto:quockhuong0330@gmail.com" class="cols">Quockhuong0330@gmail.com</a></li>
							<li><a href="#">TRỤ SỞ TP.HỒ CHÍ MINH:<br />
							Tầng 6 Tòa nhà 123, 123 Võ Văn Tần, phường 6, quận 3, Tp. HCM Điện thoại: 08.73077979, máy lẻ 216</a></li>
					</ul>
				</div>
				<div class="col-md-4 footer-grid-left">
					<h3>Mẫu liên hệ</h3>
                   <?php require 'block/nhanxet.php'?>
				</div>
				<div class="col-md-4 footer-grid-left">
					<h3>Giới Thiệu</h3>
					<p>Đây là một đồ án cơ sở viết code web tin tức về game do tôi phát triển. Web này được viết bằng các ngôn ngữ HTML, CSS, javascript, PHP.
						<span>Họ Tên: Nguyên Huỳnh Quốc Khương <br />Lớp: 14CTH02<br />MSSV: 1412360209<br />Ngày sinh: 17/06/1996</span>
						<i>-Key Phởn</i></p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="footer-bottom">
				<div class="footer-bottom-left-whtree-agileinfo">
					<p>&copy 2017 key Esports. All rights reserved | by <a href="https://www.facebook.com/key.phon">Khương Nguyễn</a></p>
				</div>
				<div class="footer-bottom-right-whtree-agileinfo">
					<ul>
						<li><a href="#" class="icon-button twitter"><i class="icon-twitter"></i><span></span></a></li>
						<li><a href="#" class="icon-button google"><i class="icon-google"></i><span></span></a></li>
						<li><a href="#" class="icon-button v"><i class="icon-v"></i><span></span></a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //footer -->
	<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
    <script>
        window.fbAsyncInit = function() {
            FB.init({
                appId      : '1901434060141138',
                xfbml      : true,
                version    : 'v2.9'
            });
            FB.AppEvents.logPageView();
        };

        (function(d, s, id){
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {return;}
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
	<!-- //for bootstrap working -->
</body>

</html>
