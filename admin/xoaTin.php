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
    $idTin=$_GET['idTin'];
    settype($idTin,'int');
    $qr="DELETE FROM tin WHERE idTin=$idTin";
    mysql_query($qr);
    header('location: listtin.php');
?>
