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
if(isset($_POST['btnSubmit'])){
    $UserName=$_POST['txtUser'];
    if($_POST['txtPass']==$_POST['txtReplyPass'])
    {
        $txtPass=$_POST['txtPass'];
        $Pass=md5($txtPass);
    }
    $Mail=$_POST['txtMail'];
    $HoTen=$_POST['txtHoTen'];
    $NgaySinh=$_POST['txtNgaySinh'];
    $GioiTinh=$_POST['txtSex'];
    $DiaChi=$_POST['txtDiaChi'];
    $SoDT=$_POST['txtSoDT'];
    $Ngay=date('Y-m-d');
    if(!empty($Pass)) {
        $qr = "INSERT INTO `users`(HoTen, Username, Password, DiaChi, DienThoai, Email, NgayDangKy, NgaySinh, GioiTinh) VALUES ('$HoTen','$UserName','$Pass','$DiaChi','$SoDT','$Mail','$Ngay','$NgaySinh','$GioiTinh')";
        mysql_query($qr);
    } else $erro='Mật Khẩu không trùng';


}
?>
<?php
require_once 'block/header.php';
?>
        <!-- viet o day -->
        <div class="outter-wp">

          <div class="cal-main">
              <h1 style="color: #ffc066";>Đăng Ký</h1>
                <div class="graph-form">

                    <div class="form-body">
                        <form method="post">
                            <div class="form-group">
                                <label for="txtUser">Tên Đăng Nhập</label>
                                <input type="text" name="txtUser" class="form-control" id="UserName" value="<?php echo isset($_POST['txtUser']) ? $_POST['txtUser'] : "";?>" placeholder="Tên Đăng nhập">
                            </div>
                            <div class="form-group">
                                <label for="txtPass">Mật Khẩu</label>
                                <input type="password" name="txtPass" class="form-control" id="Pass" placeholder="Nhập Mật Khẩu....">
                            </div>
                            <div class="form-group">
                                <label for="txtReplyPass">Nhập Lại Mật Khẩu</label>
                                <input type="password" name="txtReplyPass" class="form-control" placeholder="Nhập Lại Mật Khẩu...">
                                <?php echo isset($erro) ? '<h style="color: #904844;">' .$erro.'</h>' : "";   ?>
                            </div>
                            <div class="form-group">
                                <label for="txtMail">Địa Chỉ Mail</label>
                                <input type="email" name="txtMail" class="form-control" value="<?php echo isset($_POST['txtMail']) ? $_POST['txtMail'] : "";?>" placeholder="Nhập Mail...">
                            </div>
                            <div class="form-group">
                                <label for="txtHoTen">Họ Tên</label>
                                <input type="text" name="txtHoTen" class="form-control" id="HoTen" placeholder="Họ Tên..." value="<?php echo isset($_POST['txtHoTen']) ? $_POST['txtHoTen'] : "";?>">
                            </div>
                            <div class="form-group">
                                <label for="txtNgaySinh">Ngày Sinh</label>
                                <input type="date" name="txtNgaySinh" class="form-control" id="NgaySinh" value="<?php echo isset($_POST['txtNgaySinh']) ? $_POST['txtNgaySinh'] : "";?>">
                            </div>
                            <div class="form-group">
                                <label for="txtSex">Giới Tính</label>
                                <select name="txtSex" style="height: 45px;" class="form-control">
                                    <option value="" selected >--Chọn Giới Tính</option>
                                    <option value="Nam">Nam</option>
                                    <option value="Nữ">Nữ</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="txtDiaChi">Địa Chỉ</label>
                                <input name="txtDiaChi" value="<?php echo isset($_POST['txtDiaChi']) ? $_POST['txtDiaChi'] : "";?>" type="text" class="form-control" placeholder="Nhập Địa Chỉ...">
                            </div>
                            <div class="form-group">
                                <label for="txtSoDT">Số Điện Thoại</label>
                                <input class="form-control" type="number" value="<?php echo isset($_POST['txtSoDT']) ? $_POST['txtSoDT'] : "";?>" name="txtSoDT" placeholder="....">
                            </div>
                            <input name="btnSubmit" type="submit" value="Đăng Ký" style="padding: 30px 30px 30px 30px;">
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