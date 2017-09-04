<?php
    $idTL=3;
    $camnang=TinCanLay($idTL);
    while ($row_camnang=mysql_fetch_array($camnang)){
?>
<div class="facts">
  <div class="tab_list">
    <img src="images/hinh_baiviet/<?php echo $row_camnang['urlHinh']?>" alt=" " class="img-responsive">
  </div>
  <div class="tab_list1">
    <ul>
      <li><a href="#">Cẩm Nang</a> <label>|</label></li>
      <li><?php echo $row_camnang['Ngay'] ?></li>
    </ul>
    <p><a href="index.php?p=single&idTin=<?php echo $row_camnang['idTin'] ?>"><?php echo $row_camnang['TieuDe'] ?></a></p>
  </div>
  <div class="clearfix"> </div>
</div>
<?php
}
?>
