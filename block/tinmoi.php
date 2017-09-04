<?php
    $tinmoi=TinMoiNhat();
    while ($row_tinmoi= mysql_fetch_array($tinmoi)){

?>
<li>
  <div class="banner-info-slider">
    <ul>
      <li><a href="#"><?php echo $row_tinmoi['TenTL'] ?></a></li>
      <li><?php echo $row_tinmoi['Ngay'] ?></li>
    </ul>
    <h3><?php echo $row_tinmoi['TieuDe'] ?></h3>
    <p><?php echo $row_tinmoi['TomTat'] ?><span>By <i>Gosu.Katie</i></span></p>
    <div class="more">
      <a href="index.php?p=single&idTin=<?php echo $row_tinmoi['idTin'] ?>" class="type-1">
        <span> Xem </span>
        <span> Xem </span>
      </a>
    </div>
  </div>
</li>
<?php }?>
