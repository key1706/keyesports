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
                <h2 class="inner-tittle">Quản Lý Loại Tin</h2>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>ID Loại Tin</th>
                        <th>Tên loại Tin</th>
                        <th>Tên Loại Tin KD</th>
                        <th>Thứ Tự</th>
                        <th>ID Thể Loại</th>
                        <th><a href="themLoaiTin.php">
                                <button type="button" class="btn btn-primary">Thêm</button>
                            </a></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                        $loaitin=DanhSachLoaiTin();
                        while ($row_loaitin=mysql_fetch_array($loaitin)){
                            ob_start();
                    ?>
                        <tr>
                            <td>{idLT}</td>
                            <td>{TenLT}</td>
                            <td>{TenLT_KhongDau}</td>
                            <td>{ThuTu}</td>
                            <td>{idTL}</td>
                            <td>

                                <a href="suaLoaiTin.php?idLT={idLT}">
                                    <button type="button" class="btn btn-danger">Sửa</button>
                                </a>
                                <a onclick="return confirm('Bạn Có Muốn Xóa Không !!!')" href="xoaLoaiTin.php?idLT={idLT}">
                                    <button type="button" class="btn btn-warning">Xóa</button>
                                </a>
                            </td>
                        </tr>
                        <?php
                            $s=ob_get_clean();
                            $s=str_replace('{idLT}',$row_loaitin['idLT'],$s);
                            $s=str_replace('{TenLT}',$row_loaitin['TenLT'],$s);
                            $s=str_replace('{TenLT_KhongDau}',$row_loaitin['TenLT_KhongDau'],$s);
                            $s=str_replace('{ThuTu}',$row_loaitin['ThuTu'],$s);
                            $s=str_replace('{idTL}',$row_loaitin['TenTL'],$s);
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