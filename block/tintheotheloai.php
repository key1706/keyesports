<?php
    $tinvideo=TinTheoTL($idTL);
    while ($row_tinvideo= mysql_fetch_array($tinvideo)) {
        ?>
        <li>
            <div class="news-grid-left1">
                <img src="images\hinh_baiviet\<?php echo $row_tinvideo['urlHinh']?>" alt=" " class="img-responsive"/>
            </div>
            <div class="news-grid-right1">
                <h4><a href="index.php?p=single&idTin=<?php echo $row_tinvideo['idTin'] ?>"><?php echo $row_tinvideo['TieuDe'] ?></a></h4>
                <h5>By <a href="#">Green</a> <label>|</label> <i><?php echo $row_tinvideo['Ngay'] ?></i></h5>
                <p><?php echo $row_tinvideo['TomTat'] ?></p>
            </div>
            <div class="clearfix"></div>
        </li>
        <?php
    }
?>
