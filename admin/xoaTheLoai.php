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
    $idTL=$_GET['idTL'];
    settype($idTL,'int');
    $qr="DELETE FROM theloai WHERE idTL=$idTL";
    mysql_query($qr);
    header('location: listtheloai.php');
?>
