<!--footer section start-->
<footer>
    <p>&copy 2017 Augment . All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">W3layouts.</a></p>
</footer>
<!--footer section end-->
</div>
</div>
<!--//content-inner-->
<!--/sidebar-menu-->
<div class="sidebar-menu">
    <header class="logo">
        <a href="index.html"> <span id="logo"> <h1 style="padding-left: 40px;">Quản Lý</h1></span>
            <!--<img id="logo" src="" alt="Logo"/>-->
        </a>
    </header>
    <div style="border-top:1px solid rgba(69, 74, 84, 0.7)"></div>
    <!--/down-->
    <div class="down">
        <a href="index.php"><img src="images/kay.jpg"></a>
        <a href="index.php"><span class=" name-caret"><?php echo $_SESSION['username']?></span></a>
        <p>Admin</p>
        <ul>
            <li><a class="tooltips" href="index.html"><span>Profile</span><i class="lnr lnr-user"></i></a></li>
            <li><a class="tooltips" href="index.html"><span>Settings</span><i class="lnr lnr-cog"></i></a></li>
            <li><a class="tooltips" href="logout.php"><span>Log out</span><i class="lnr lnr-power-switch"></i></a></li>
        </ul>
    </div>
    <!--//down-->
    <div class="menu">
        <ul id="menu">
            <li><a href="index.php"><i class="glyphicon glyphicon-dashboard"></i><span>Thống Kê</span></a></li>
            <li><a href="listtin.php"><i class="fa fa-table"></i> <span>Viết Tin</span></a></li>
            <li><a href="listtheloai.php"><i class="glyphicon glyphicon-list-alt"></i><span>Quản Lý Thể Loại</span> </a> </li>
            <li><a href="listloaitin.php"><i class="glyphicon glyphicon-list"></i><span>Quản Lý Loại Tin</span> </a> </li>
            <li><a href="dangky.php"><i class="lnr lnr-pencil"></i> <span>Đăng Ký Thành viên</span></a></li>
            <li><a href="nhanxet.php"><i class="fa fa-inbox"></i> <span>Nhận Xét Đọc Giả</span></a></li>
        </ul>
    </div>
</div>
<div class="clearfix"></div>
</div>
<link rel="stylesheet" href="css/vroom.css">
<script type="text/javascript" src="js/vroom.js"></script>
<script type="text/javascript" src="js/TweenLite.min.js"></script>
<script type="text/javascript" src="js/CSSPlugin.min.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
</body>

</html>
