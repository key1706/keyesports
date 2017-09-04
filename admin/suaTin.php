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
    $idTin=$_GET['idTin'];
    settype($idTin,'int');
    $row_tin=ChiTietTin($idTin);
?>
<?php
if(isset($_POST['btnSua'])){
    $txtIdTin=$_POST['txtIdTin'];
    settype($txtIdTin,'int');
    $txtTieuDe=$_POST['txtTieuDe'];
    $txtTieuDeTKD= changeTitle($txtTieuDe);
    $txtTomTat=$_POST['txtTomTat'];
    $txtUrlHinh=$_POST['hinh'];
    $txtIdUser=$_POST['txtIdUser'];
    $txtContent=$_POST['txtContent'];
    $cbIdLT=$_POST['cbIdLT'];
    $cbIdTL=$_POST['cbIdTL'];
    $solanxem= 0;
    $ngay= date('Y-m-d');
    $cbHot=$_POST['cbHot'];
    $qr="UPDATE tin SET idTin='$idTin', TieuDe='$txtTieuDe', TieuDe_KhongDau='$txtTieuDeTKD', TomTat='$txtTomTat', urlHinh='$txtUrlHinh', idUser='$txtIdUser', Content='$txtContent', idLT='$cbIdLT', idTL='$cbIdTL', AnHien='$cbHot' WHERE  idTin='$idTin'";
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
                                <label for="txtIdTin">ID Tin</label>
                                <input type="text" name="txtIdTin" class="form-control" id="idTin" value="<?php echo $row_tin['idTin']  ?>">
                            </div>
                            <div class="form-group">
                                <label for="txtTieuDe">Tiêu Đề</label>
                                <input type="text" name="txtTieuDe" class="form-control" id="TieuDe" value="<?php echo $row_tin['TieuDe']  ?>">
                            </div>
                            <div class="form-group">
                                <label for="txtTomTat">Tóm Tắt</label>
                                <input type="text" name="txtTomTat" class="form-control" id="TomTat" value="<?php echo $row_tin['TomTat']  ?>">
                            </div>
                            <div class="form-group">
                                <label for="txtUrlHinh">Hình</label>
                                <input type='file' name="avatar"/>
                                <input type="text" name="hinh" value="<?php echo $row_tin['urlHinh']  ?>">


                            </div>
                            <div class="form-group">
                                <label for="txtIdUser">Id User</label>
                                <input type="text" name="txtIdUser" class="form-control" id="IdUser" value="<?php echo $row_tin['idUser']  ?>">
                            </div>
                            <div class="form-group">
                                <label for="txtContent">Nội Dung</label>
                                <textarea id="editor1" name="txtContent" cols="80" rows="10" "><?php echo $row_tin['Content'] ?></textarea>
         
                            <!-- (3): Code Javascript thay thế textarea có id='editor1' bởi CKEditor -->
                            <script>
                      
                                CKEDITOR.replace( 'editor1' );
                      
                            </script>   
                            </div>
                            <div class="form-group">
                                <label for="cbIdLT">ID Loại Tin</label>
                                <select STYLE="height: 50px" name="cbIdLT" class="form-control" id="sel1">
                                    <?php
                                    $loaitin=DanhSachLoaiTin();
                                    while ($row_loatin=mysql_fetch_array($loaitin)) {
                                        ?>
                                        <option <?php if($row_loatin['idLT']==$row_tin['idLT']) echo "selected='selected'" ?>value="<?php echo $row_loatin['idLT']  ?>"><?php echo $row_loatin['TenLT']  ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>

                            </div>
                            <div class="form-group">
                                <label for="cbIdTL">ID Thể loại</label>
                                <select STYLE="height: 50px" name="cbIdTL" class="form-control" id="sel1">
                                    <?php
                                    $theloai=DanhSachTheLoai();
                                    while ($row_theloai=mysql_fetch_array($theloai)) {
                                        ?>
                                        <option <?php if($row_theloai['idTL']==$row_tin['idTL']) echo "selected='selected'" ?> value="<?php echo $row_theloai['idTL']  ?>"><?php echo $row_theloai['TenTL']  ?></option>
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

                            <input name="btnSua" type="submit" value="Sửa">
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
<?php
require_once 'block/footer.php';
?>