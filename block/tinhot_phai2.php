<?php
    $tinhot=TinHot();
    while ($row_tinhot=mysql_fetch_array($tinhot)){
?>
<div class="facts">
  <div class="tab_list">
    <img src="images/hinh_baiviet/<?php echo $row_tinhot['urlHinh']?>" alt=" " class="img-responsive">
  </div>
  <div class="tab_list1">
    <ul>
      <li><a href="#"><?php  echo $row_tinhot['TenTL'] ?></a> <label>|</label></li>
      <li><?php echo $row_tinhot['Ngay'] ?></li>
    </ul>
    <p><a href="index.php?p=single&idTin=<?php echo $row_tinhot['idTin'] ?>"><?php echo $row_tinhot['TieuDe'] ?></a></p>
  </div>
  <div class="clearfix"> </div>
</div>
<?php
}
?>