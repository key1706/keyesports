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
    $idLT=$_GET['idLT'];
    settype($idLT,'int');
    $qr="DELETE FROM loaitin WHERE idLT=$idLT";
    mysql_query($qr);
    header('location: listloaitin.php');
?>
