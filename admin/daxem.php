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
    $id=$_GET['id'];
    $DAXEM=0;
    $qr="UPDATE `nhanxet` SET TrangThai='$DaXEM' WHERE id=$id";
    mysql_query($qr);
    header('location: nhanxet.php');

?>