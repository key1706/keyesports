<?php
require "dbCon.php";
function TinMoiNhat(){
    $qr="
           select * from tin t, theloai l WHERE t.idTL=l.idTL ORDER BY idTin DESC LiMIT 0,4
        ";
    return  mysql_query("$qr");
}
    function TinEsports($idTL){
        $qr="
          select * from tin WHERE idTL=$idTL ORDER BY idTin DESC limit 0,6
        ";
        return mysql_query("$qr");
    }
    function TinHot(){
        $qr="SELECT * FROM tin, theloai WHERE tin.idTL=theloai.idTL AND AnHien=1 ORDER BY tin.SoLanXem ASC  LIMIT 0,5";
        return mysql_query("$qr");
    }
    function TinCanLay($idTL){
        $qr="
              select * from tin WHERE idTL=$idTL ORDER BY idTin DESC limit 0,5
            ";
        return mysql_query("$qr");
}
    function ChiTietTin($idTin){
    $qr="select * from tin WHERE idTin=$idTin";
    return mysql_query("$qr");
    }
    function HienTinTheoLoai($idLT){
        $qr="select * from tin WHERE idLT=$idLT ORDER BY idTin DESC ";
        return mysql_query("$qr");
    }
    function HienTenLoaiTin($idLT){
        $qr="select * from loaitin WHERE idLT=$idLT";
        return mysql_query("$qr");
    }
    function TinTheoTL($idTL)
    {
        $qr = "
                  select * from tin WHERE idTL=$idTL ORDER BY idTin DESC 
                ";
        return mysql_query("$qr");
    }
    function TinCungLoai($idTin, $idLT)
    {
        $qr="SELECT * FROM tin t, loaitin l WHERE l.idLT=t.idLT AND t.idTin<>$idTin AND t.idLT=$idLT ORDER  BY RAND() LiMIT 0,5";
        return mysql_query("$qr");
    }
    function CapNhatSoLanXemTin($idTin)
    {
        $qr="UPDATE tin SET SoLanXem=SoLanXem + 1 WHERE idTin=$idTin";
        mysql_query($qr);
    }

?>

