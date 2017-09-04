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
    $txtIdLT=$_POST['txtIdLT'];
    settype($txtIdLT,'int');
    $txtTenLT=$_POST['txtTenLT'];
    $txtTenLTKD= changeTitle($txtTenLT);
    $txtThutu=$_POST['txtThutu'];
    settype($txtThutu,'int');
    $cbIdTL=$_POST['cbIdTL'];
    $qr="INSERT INTO loaitin
              VALUES('$txtIdLT','$txtTenLT','$txtTenLTKD','$txtThutu','$cbIdTL')";
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
              <h1 style="color: #ffc066";>Thêm Loại Tin</h1>
                <div class="graph-form">

                    <div class="form-body">
                        <form method="post">
                            <div class="form-group">
                                <label for="txtIdLT">ID Loại Tin</label>
                                <input type="text" name="txtIdLT" class="form-control" id="idLT" placeholder="ID Loại Tin">
                            </div>
                            <div class="form-group">
                                <label for="txtTenLT">Tên Loại Tin</label>
                                <input type="text" name="txtTenLT" class="form-control" id="TenLT" placeholder="Tên Loại Tin">
                            </div>
                            <div class="form-group">
                                <label for="txtThutu">Thứ Tự</label>
                                <input type="text" name="txtThutu" class="form-control" id="ThuTu" placeholder="Thứ Tự">
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
                            <input name="btnThem" type="submit" value="Thêm">
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
    <!--footer section start-->
    <footer>
      <p>&copy 2017 Augment . All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">W3layouts.</a></p>
    </footer>
<?php
require_once 'block/footer.php';
?>
