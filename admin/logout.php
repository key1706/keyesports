<?php
ob_start();
session_start();

if (isset($_SESSION['idUser'])){
    unset($_SESSION['idUser']); // xóa session login
    header('location: index.php');
}
?>
