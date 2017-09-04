<?php
    require "lib/dbCon.php";
    require "lib/trangchu.php";
?>
<div class="banner">
  <div class="banner-info">
    <div class="container">
      <nav class="navbar navbar-default">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
          <div class="logo">
            <a class="navbar-brand" href="index.php" style="color:black;"><span>K</span> KEY ESPORTS</a>
          </div>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav cl-effect-18" id="cl-effect-18">
            <li class="act"><a href="index.php" class="effect1 active">TRANG CHỦ</a></li>
            <li role="presentation" class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                TIN TỨC <span class="caret"></span>
              </a>
              <ul class="dropdown-menu">
                <li><a href="index.php?p=chitiettin&idLT=1">PBE</a></li>
                <li><a href="index.php?p=chitiettin&idLT=2">TIỀN MÙA GIẢI</a></li>
                  <li>
                    <li><a href="index.php?p=chitiettin&idLT=3">PHÂN TÍCH</a></li>
                    <li><a href="index.php?p=chitiettin&idLT=4">PHÁT TRIỂN</a></li>
                    <li><a href="index.php?p=chitiettin&idLT=5">XU HƯỚNG</a></li>

              </ul>
              </li>
              <li role="presentation" class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                TIN ESPORTS <span class="caret"></span>
              </a>
                <ul class="dropdown-menu">
                  <li><a href="index.php?p=chitiettin&idLT=6">LCK-LPL</a></li>
                  <li><a href="index.php?p=chitiettin&idLT=7">LỊCH THI ĐẤU</a></li>
                  <li><a href="index.php?p=chitiettin&idLT=8">MDSC</a></li>
                  <li><a href="index.php?p=chitiettin&idLT=9"> LCS NA/EU</a></li>
                  <li><a href="index.php?p=chitiettin&idLT=10">QUỐC TẾ</a></li>
                  <li><a href="index.php?p=chitiettin&idLT=11">GPL 2017</a> </li>

                </ul>
              </li>
              <li role="presentation" class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                CẨM NANG <span class="caret"></span>
              </a>
                <ul class="dropdown-menu">
                  <li><a href="index.php?p=chitiettin&idLT=12">TƯỚNG</a></li>
                  <li><a href="index.php?p=chitiettin&idLT=13">CHIẾN THUẬT</a></a>
                  </li>
                  <li><a href="index.php?p=chitiettin&idLT=14">CƠ CHẾ HOẠT ĐỘNG</a></li>
                </ul>
              </li>
              <li><a href="index.php?p=tinvideo&idTL=4">VIDEO</a></li>

              <li><a href="#">HÌNH ẢNH</a></li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->

      </nav>
      <!--banner-Slider-->
      <script src="js/responsiveslides.min.js"></script>
      <script>
        // You can also use "$(window).load(function() {"
        $(function() {
          // Slideshow 4
          $("#slider3").responsiveSlides({
            auto: true,
            pager: true,
            nav: true,
            speed: 500,
            namespace: "callbacks",
            before: function() {
              $('.events').append("<li>before event fired.</li>");
            },
            after: function() {
              $('.events').append("<li>after event fired.</li>");
            }
          });

        });
      </script>
      <div id="top" class="callbacks_container">
        <ul class="rslides" id="slider3">
        <!-- Tin mới -->
        <?php require "block/tinmoi.php" ?>
        <!-- end tin mới -->
        </ul>
      </div>
    </div>
  </div>
</div>
