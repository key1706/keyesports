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
require_once 'block/header.php';
?>
        <!-- viet o day -->
        <div class="outter-wp">

          <div class="cal-main">
            <div class="calender graph-form">
                <h2 class="inner-tittle">Quản Lý Thể Loại</h2>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>ID Thể Loại</th>
                        <th>Tên Thể loại</th>
                        <th>Tên Thể Loại KD</th>
                        <th>Thứ Tự</th>
                        <th><a href="themTheLoai.php">
                                <button type="button" class="btn btn-primary">Thêm</button>
                            </a></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $theloai=DanhSachTheLoai();
                    while ($row_theloai=mysql_fetch_array($theloai)){
                        ob_start();
                        ?>
                        <tr>
                            <td>{idTL}</td>
                            <td>{TenTL}</td>
                            <td>{TenTL_KhongDau}</td>
                            <td>{ThuTu}</td>
                            <td>

                                <a href="suaTheLoai.php?idTL={idTL}">
                                    <button type="button" class="btn btn-danger">Sửa</button>
                                </a>
                                <a onclick="return confirm('Bạn Có Muốn Xóa Không !!!')" href="xoaTheLoai.php?idTL={idTL}">
                                    <button type="button" class="btn btn-warning">Xóa</button>
                                </a>
                            </td>
                        </tr>
                        <?php
                        $s= ob_get_clean();
                        $s= str_replace('{idTL}',$row_theloai['idTL'],$s);
                        $s=str_replace('{TenTL}',$row_theloai['TenTL'],$s);
                        $s=str_replace('{TenTL_KhongDau}',$row_theloai['TenTL_KhongDau'],$s);
                        $s=str_replace('{ThuTu}',$row_theloai['ThuTu'],$s);
                        echo $s;
                    }
                    ?>
                    </tbody>
                </table>

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