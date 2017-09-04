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
    $idTL=$_GET['idTL']; settype($idTL,'int');
    $row_theloai=ChiTietTheLoai($idTL);
    ?>
    <?php
    if(isset($_POST['btnSua'])){
        $txtIdTL=$_POST['txtIdTL'];
        settype($txtIdTL,'int');
        $txtTenTL=$_POST['txtTenTL'];
        $txtTenTLKD= changeTitle($txtTenTL);
        $txtThutu=$_POST['txtThutu'];
        settype($txtThutu,'int');
        $qr="UPDATE theloai SET idTL='$txtIdTL', TenTL='$txtTenTL', TenTL_KhongDau='$txtTenTLKD', ThuTu='$txtThutu' WHERE theloai.idTL = $idTL";
        mysql_query($qr);
        header("location: listtheloai.php");
    }
    ?>
<?php
require_once 'block/header.php';
?>
        <!-- viet o day -->
        <div class="outter-wp">

          <div class="cal-main">
            <div class="calender graph-form">
                <h1 style="color: #ffc066";>Sửa Thể Loại</h1>
                <div class="graph-form">
                    <div class="form-body">
                        <form method="post">
                            <div class="form-group">
                                <label for="txtIdTL">ID Thể Loại</label>
                                <input type="text" name="txtIdTL" class="form-control" id="idTL" value="<?php echo $row_theloai['idTL'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="txtTenTL">Tên Thể Loại</label>
                                <input type="text" name="txtTenTL" class="form-control" id="TenTL" value="<?php echo $row_theloai['TenTL'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="txtTenTL">Tên Thể Loại Không Dấu</label>
                                <input type="text" name="txtTenTLDK" class="form-control" id="TenTL" value="<?php echo $row_theloai['TenTL_KhongDau'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="txtThutu">Thứ Tự</label>
                                <input type="text" name="txtThutu" class="form-control" id="txtThutu" value="<?php echo $row_theloai['ThuTu'] ?>">
                            </div>
                            <input name="btnSua" type="submit" value="Sửa">
                        </form>
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
<?php
require_once 'block/footer.php';
?>