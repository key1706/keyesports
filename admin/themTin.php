<?php
ob_start();
session_start();
if(!isset($_SESSION['idUser'])){
    header('location:../index.php');
}
?>
<?php
    require '../lib/dbCon.php';
    require '../lib/quantri.php';
?>
<?php
if(isset($_POST['btnThem'])){
    //$txtIdTin=$_POST['txtIdTin'];
    settype($txtIdTin,'int');
    $txtTieuDe=$_POST['txtTieuDe'];
    $txtTieuDeTKD= changeTitle($txtTieuDe);
    $txtTomTat=$_POST['txtTomTat'];
    $txtUrlHinh=$_FILES['avatar']['name'];
    $txtIdUser=$_SESSION['idUser'];
    $txtContent=$_POST['txtContent'];
    $cbIdLT=$_POST['cbIdLT'];
    $cbIdTL=$_POST['cbIdTL'];
    $cbHot=$_POST['cbHot'];
    $solanxem= 0;
    $ngay= date('Y-m-d');
    $qr="INSERT INTO tin (`TieuDe`, `TieuDe_KhongDau`, `TomTat`, `urlHinh`, `idUser`, `Content`, `idLT`, `idTL`, `SoLanXem`, `Ngay`, `AnHien`)
              VALUES('$txtTieuDe','$txtTieuDeTKD','$txtTomTat','$txtUrlHinh','$txtIdUser','$txtContent','$cbIdLT','$cbIdTL','$solanxem','$ngay',$cbHot)";
    mysql_query($qr);
    header("location: listtin.php");
}
?>
<?php
require_once 'block/header.php';
?>
        <!-- viet o day -->
        <div class="outter-wp">

          <div class="cal-main">
              <h1 style="color: #ffc066";>Thêm Loại Tin</h1>
                <div class="graph-form">

                    <div class="form-body">
                        <form method="post" action="" enctype="multipart/form-data">

                            <div class="form-group">
                                <label for="txtTieuDe">Tiêu Đề</label>
                                <input type="text" name="txtTieuDe" class="form-control" id="TieuDe" placeholder="Tiêu Đề">
                            </div>
                            <div class="form-group">
                                <label for="txtTomTat">Tóm Tắt</label>
                                <input type="text" name="txtTomTat" class="form-control" id="TomTat" placeholder="Thứ Tự">
                            </div>
                            <div class="form-group">
                                <label for="txtUrlHinh">Hình</label>
                                <input type='file' name="avatar"/>
                            </div>
                            <div class="form-group">
                                <label for="txtContent">Nội Dung</label>
                                <textarea id="editor1" name="txtContent" cols="80" rows="10">
                                    <p>Nhập Nội Dung....</p>
                                </textarea>     
                            <!-- (3): Code Javascript thay thế textarea có id='editor1' bởi CKEditor -->
                            <script>
                      
                                CKEDITOR.replace( 'editor1' );
                      
                            </script>   
                            </div>
                            <div class="form-group">
                                <label for="cbIdTL">ID Loại Tin</label>
                                <select name="cbIdLT" multiple class="form-control" id="sel1">
                                    <?php
                                    $loaitin=DanhSachLoaiTin();
                                    while ($row_loatin=mysql_fetch_array($loaitin)) {
                                        ?>
                                        <option value="<?php echo $row_loatin['idLT']  ?>"><?php echo $row_loatin['TenLT']  ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>

                            </div>
                            <div class="form-group">
                                <label for="cbIdTL">ID Thể loại</label>
                                <select name="cbIdTL" multiple class="form-control" id="sel1">
                                    <?php
                                    $theloai=DanhSachTheLoai();
                                    while ($row_theloai=mysql_fetch_array($theloai)) {
                                        ?>
                                        <option value="<?php echo $row_theloai['idTL']  ?>"><?php echo $row_theloai['TenTL']  ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>

                            </div>
                            <div class="form-group">
                                <label for="cbHot">ID Thể loại</label>
                                <select name="cbHot" multiple class="form-control" id="sel1">
                                    <option value="0">Ẩn</option>
                                    <option value="1">Hiện</option>
                                </select>

                            </div>

                            <input name="btnThem" type="submit" value="Thêm">
                        </form>
                        <?php // Xử Lý Upload

                        // Nếu người dùng click Upload
                        if (isset($_POST['btnThem']))
                        {
                            // Nếu người dùng có chọn file để upload
                            if (isset($_FILES['avatar']))
                            {
                                // Nếu file upload không bị lỗi,
                                // Tức là thuộc tính error > 0
                                if ($_FILES['avatar']['error'] > 0)
                                {
                                    echo 'File Upload Bị Lỗi';
                                }
                                else{
                                    // Upload file
                                    move_uploaded_file($_FILES['avatar']['tmp_name'], '../images/hinh_baiviet/'.$_FILES['avatar']['name']);
                                    echo 'File Uploaded';
                                }
                            }
                            else{
                                echo 'Bạn chưa chọn file upload';
                            }
                        }
                        ?>
                    </div>

                </div>

            </div>


          </div>
          <!-- end viet o day -->
          <div class="clearfix"> </div>
        </div>
        <!--/float-charts-->


      </div>
      <!--/charts-inner-->
    </div>
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
        <a href="index.php"><span class=" name-caret">Key</span></a>
        <p>Quản Trị Hệ Thống Trong Công Ty</p>s
      <ul>
        <li><a class="tooltips" href="index.html"><span>Profile</span><i class="lnr lnr-user"></i></a></li>
        <li><a class="tooltips" href="index.html"><span>Settings</span><i class="lnr lnr-cog"></i></a></li>
        <li><a class="tooltips" href="index.html"><span>Log out</span><i class="lnr lnr-power-switch"></i></a></li>
      </ul>
    </div>
    <!--//down-->
    <div class="menu">
      <ul id="menu">
          <li><a href="index.php"><i class="fa fa-table"></i> <span>Viết Tin</span></a></li>
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
