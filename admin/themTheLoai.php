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
        $txtIdTL=$_POST['txtIdTL'];
        settype($txtIdTL,'int');
        $txtTenTL=$_POST['txtTenTL'];
        $txtTenTLKD= changeTitle($txtTenTL);
        $txtThutu=$_POST['txtThutu'];
        settype($txtThutu,'int');
         $qr="INSERT INTO theloai
              VALUES('$txtIdTL','$txtTenTL','$txtTenTLKD','$txtThutu')";
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
              <h1 style="color: #ffc066";>Thêm Thể Loại</h1>
            <div class="calender graph-form">
                <div class="graph-form">
                    <div class="form-body">
                        <form method="post">
                            <div class="form-group">
                                <label for="txtIdTL">ID Thể Loại</label>
                                <input type="text" name="txtIdTL" class="form-control" id="idTL" placeholder="ID Thể Loại">
                            </div>
                            <div class="form-group">
                                <label for="txtTenTL">Tên Thể Loại</label>
                                <input type="text" name="txtTenTL" class="form-control" id="TenTL" placeholder="Tên Thể Loại">
                            </div>
                            <div class="form-group">
                                <label for="txtThutu">Thứ Tự</label>
                                <input type="text" name="txtThutu" class="form-control" id="txtThutu" placeholder="Thứ Tự">
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