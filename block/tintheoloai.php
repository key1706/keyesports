
<?php
    $tin=HienTinTheoLoai($idLT);
    while ($row_tin= mysql_fetch_array($tin)) {
        ?>
        <li>
            <div class="news-grid-left1">
                <img src="images\hinh_baiviet\<?php echo $row_tin['urlHinh']?>" alt=" " class="img-responsive"/>
            </div>
            <div class="news-grid-right1">
                <h4><a href="index.php?p=single&idTin=<?php echo $row_tin['idTin'] ?>"><?php echo $row_tin['TieuDe'] ?></a></h4>
                <h5>By <a href="#">Green</a> <label>|</label> <i><?php echo $row_tin['Ngay'] ?></i></h5>
                <p><?php echo $row_tin['TomTat'] ?></p>
            </div>
            <div class="clearfix"></div>
        </li>
        <?php
    }
?>
