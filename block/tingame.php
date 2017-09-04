<?php
$idTL=1;
$tingame=TinEsports($idTL);
while ($row_tingame=mysql_fetch_array($tingame)){
?>
<li>
  <div class="news-grid-left1">
    <img src="images\hinh_baiviet\<?php echo $row_tingame['urlHinh'] ?>" alt=" " class="img-responsive" />
  </div>
  <div class="news-grid-right1">
    <h4><a href="index.php?p=single&idTin=<?php echo $row_tingame['idTin'] ?>"><?php echo $row_tingame['TieuDe'] ?></a></h4>
    <h5>By <a href="#">Green</a> <label>|</label> <i><?php echo $row_tingame['Ngay'] ?></i></h5>
    <p><?php echo $row_tingame['TomTat'] ?></p>
  </div>
  <div class="clearfix"> </div>
</li>
<?php
}
?>
