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
                        <th>ID User</th>
                        <th>Tên đăng nhập</th>
                        <th>Họ tênl</th>
                        <th>Mail</th>
                        <th>Ngày sinh</th>
                        <th>số điện thoại</th>
                        <th><a href="themTin.php">
                                <button type="button" class="btn btn-primary">Thêm</button>
                            </a></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $User=DanhSachUser();
                    while ($row_User=mysql_fetch_array($User)){
                        ob_start(); ?>
                        <tr>
                            <td>{idUser}</td>
                            <td>{Username}</td>
                            <td>{HoTen}</td>
                            <td>{Email}</td>
                            <td>{NgaySinh}</td>
                            <td>{DienThoai}</td>
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
                        $s=str_replace('{idUser}',$row_User['idUser'],$s);
                        $s=str_replace('{Username}',$row_User['Username'],$s);
                        $s=str_replace('{HoTen}',$row_User['HoTen'],$s);
                        $s=str_replace('{Email}',$row_User['Email'],$s);
                        $s=str_replace('{NgaySinh}',$row_User['NgaySinh'],$s);
                        $s=str_replace('{DienThoai}',$row_User['DienThoai'],$s);
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