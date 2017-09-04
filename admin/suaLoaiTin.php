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
$idLT=$_GET['idLT']; settype($idLT,'int');
$row_loaitin=ChiTietLoaiTin($idLT);

?>
<?php
if(isset($_POST['btnSua'])){
    $txtIdLT=$_POST['txtIdLT'];
    settype($txtIdLT,'int');
    $txtTenLT=$_POST['txtTenLT'];
    $txtTenLTKD= changeTitle($txtTenLT);
    $txtThutu=$_POST['txtThutu'];
    settype($txtThutu,'int');
    $cbIdTL=$_POST['cbIdTL'];
    $qr="UPDATE loaitin SET idLT='$txtIdLT', TenLT='$txtTenLT', TenLT_KhongDau='$txtTenLTKD', ThuTu='$txtThutu', idTL='$cbIdTL' WHERE loaitin.idLT = $idLT";
    mysql_query($qr);
    header("location: listloaitin.php");
}
?>
<?php
require_once 'block/header.php';
?>
        <!-- viet o day -->
        <div class="outter-wp">

          <div class="cal-main">
              <h1 style="color: #ffc066";>Sửa Loại Tin</h1>
                <div class="graph-form">
                    <div class="form-body">

                        <form method="post">
                            <div class="form-group">
                                <label for="txtIdLT">ID Loại Tin</label>
                                <input type="text" name="txtIdLT" class="form-control" id="idLT" value="<?php echo $row_loaitin['idLT']  ?>">
                            </div>
                            <div class="form-group">
                                <label for="txtTenLT">Tên Loại Tin</label>
                                <input type="text" name="txtTenLT" class="form-control" id="TenLT" value="<?php echo $row_loaitin['TenLT']  ?>">
                            </div>
                            <div class="form-group">
                                <label for="txtThutu">Thứ Tự</label>
                                <input type="text" name="txtThutu" class="form-control" id="ThuTu" value=" <?php echo $row_loaitin['ThuTu']  ?>">
                            </div>
                            <div class="form-group">
                                <label for="cbIdTL">ID Thể loại</label>
                                <select STYLE="height: 50px" name="cbIdTL" class="form-control" id="sel1">
                                    <?php
                                    $theloai=DanhSachTheLoai();
                                    while ($row_theloai=mysql_fetch_array($theloai)) {
                                        ?>
                                        <option <?php if($row_theloai['idTL']==$row_loaitin['idTL']) echo "selected='selected'" ?> value="<?php echo $row_theloai['idTL']  ?>"><?php echo $row_theloai['TenTL']  ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>

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