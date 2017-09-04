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
                <a href="nhanxet.php"><button type="button" style="padding-right: 10px;padding-left: 10px; padding-top: 11.2px; padding-bottom: 11.2px;" class="btn btn-default"><span class="glyphicon glyphicon-envelope
"></span> Chưa Xem</button> </a>
                <a href="nhanxet_daxem.php"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span> Đã Xem</button> </a>
                <h2 class="inner-tittle">Nhận Xét Chưa Xem</h2>
                <table class="table table-bordered">
                    <thead >
                    <tr style="text-align: center;">
                        <th style="text-align: center;">ID</th>
                        <th style="text-align: center;">Họ Tên</th>
                        <th style="text-align: center;">Mail</th>
                        <th style="text-align: center;">Nhận Xét</th>
                        <th style="text-align: center;">Trạng Thái</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                        $nhanxet=DanhSachNhanXet_ChuaXem();
                        while ($row_nhanxet=mysql_fetch_array($nhanxet)){
                            ob_start();
                    ?>
                        <tr class="warning" style="text-align: center;">
                            <td>{id}</td>
                            <td>{HoTen}</td>
                            <td>{Email}</td>
                            <td>{NoiDung}</td>
                            <td>
                                <a href="daxem.php?id={id}">
                                    <button type="button" class="btn btn-danger">Đã Xem</button>
                                </a>
                            </td>
                        </tr>
                        <?php
                            $s=ob_get_clean();
                            $s=str_replace('{id}',$row_nhanxet['id'],$s);
                            $s=str_replace('{HoTen}',$row_nhanxet['HoTen'],$s);
                            $s=str_replace('{Email}',$row_nhanxet['Email'],$s);
                            $s=str_replace('{NoiDung}',$row_nhanxet['NoiDung'],$s);
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