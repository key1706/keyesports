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
                        $sotin1trang=10;
                        if(isset($_GET['trang']))
                        {
                            $trang=$_GET['trang'];
                            settype($trang,'int');
                        } else{
                            $trang=1;
                        }
                        $from=($trang-1)*$sotin1trang;

                        $tinn=DanhSachTin_PhanTrang($from,$sotin1trang);
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

                <nav aria-label="Page navigation">
                    <ul class="pagination">
                        <li>
                            <a href="index.php" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <?php
                        $t=DanhSachTin();
                        $tongsotin=mysql_num_rows($t);
                        $tongsotrang=ceil($tongsotin/$sotin1trang);
                        for($i=1; $i<=$tongsotrang;$i++)
                        {

                        ?>
                            <li><a href="listtin.php?trang=<?php echo $i; ?>"><?php echo $i; ?></a></li>

                        <?php }
                        ?>

                        <li>
                            <a href="index.php?trang=<?php echo $tongsotrang;?>" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>

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