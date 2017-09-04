<?php $idTL=2; ?>
<?php

    $tinesports=TinEsports($idTL);
    while ($row_tinesports= mysql_fetch_array($tinesports)) {
        ?>
        <li>
            <div class="news-grid-left1">
                <img src="images\hinh_baiviet\<?php echo $row_tinesports['urlHinh']?>" alt=" " class="img-responsive"/>
            </div>
            <div class="news-grid-right1">
                <h4><a href="index.php?p=single&idTin=<?php echo $row_tinesports['idTin'] ?>"><?php echo $row_tinesports['TieuDe'] ?></a></h4>
                <h5>By <a href="#">Green</a> <label>|</label> <i><?php echo $row_tinesports['Ngay'] ?></i></h5>
                <p><?php echo $row_tinesports['TomTat'] ?></p>
            </div>
            <div class="clearfix"></div>
        </li>
        <?php
    }
?>
