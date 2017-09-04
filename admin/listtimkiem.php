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
    require_once 'block/header.php'
?>
        <!-- viet o day -->
        <div class="outter-wp">

          <div class="cal-main">
            <div class="calender graph-form">
                <h2 class="inner-tittle">Quản Lý Tin</h2>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>ID Tin</th>
                        <th>Tiêu Đề</th>
                        <th>Hình</th>
                        <th>Tóm Tắt</th>
                        <th>Thể Loại</th>
                        <th>Loại Tin</th>
                        <th><a href="themTin.php">
                                <button type="button" class="btn btn-primary">Thêm</button>
                            </a></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                        $tukhoa=$_GET['q'];
                        $tinn=TimKiem($tukhoa);
                        while ($row_tinn=mysql_fetch_array($tinn)){
                            ob_start();
                    ?>
                        <tr>
                            <td>{idTin}</td>
                            <td>{TieuDe}</td>
                            <td><img style="width: 150px; height: 100px;" src="../images\hinh_baiviet\{Hinh}"></td>
                            <td>{TomTat}</td>
                            <td>{idTL}</td>
                            <td>{idLT}</td>
                            <td>

                                <a href="suaTin.php?idTin={idTin}">
                                    <button type="button" class="btn btn-danger">Sửa</button>
                                </a>
                                <a onclick="return confirm('Bạn Có Muốn Xóa Không !!!')" href="xoaTin.php?idTin={idTin}">
                                    <button type="button" class="btn btn-warning">Xóa</button>
                                </a>
                            </td>
                        </tr>
                        <?php
                            $s=ob_get_clean();
                            $s=str_replace('{idTin}',$row_tinn['idTin'],$s);
                            $s=str_replace('{TieuDe}',$row_tinn['TieuDe'],$s);
                            $s=str_replace('{Hinh}',$row_tinn['urlHinh'],$s);
                            $s=str_replace('{TomTat}',$row_tinn['TomTat'],$s);
                            $s=str_replace('{idTL}',$row_tinn['TenTL'],$s);
                            $s=str_replace('{idLT}',$row_tinn['TenLT'],$s);
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