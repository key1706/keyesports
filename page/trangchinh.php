<!-- news-and-events -->
<div class="news">
  <div class="news-grids">
    <!-- Tin tức esports -->
    <div class="col-md-8 news-grid-left">
      <h3>TIN ESPORTS</h3>
      <ul>
        <!-- tin esports ở đây -->
          <?php
            require "block/tinesports.php";
          ?>
        <!-- // tin esports -->
      </ul>
    </div>
    <!-- end Tin tức esports -->

    <!-- Tin tức phải -->
    <div class="col-md-4 video-grids-right">
      <div class="sap_tabs">
        <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
          <ul class="resp-tabs-list">
            <li class="resp-tab-item grid1 resp-tab-active" aria-controls="tab_item-0" role="tab"><span>Tin Hot</span></li>
            <li class="resp-tab-item grid2" aria-controls="tab_item-1" role="tab"><span>Cẩm Nang</span></li>
            <div class="clear"></div>
          </ul>
          <div class="resp-tabs-container">
            <h2 class="resp-accordion resp-tab-active" role="tab" aria-controls="tab_item-0"><span class="resp-arrow"></span>Tin Hot</h2>
            <!-- tin hot -->
            <div class="tab-1 resp-tab-content resp-tab-content-active" aria-labelledby="tab_item-0" style="display:block">
              <!-- block ở đây -->
                <?php
                    require "block/tinhot_phai.php";
                ?>
              <!-- block ở đây -->
            </div>
            <!-- END tin hot -->
            <h2 class="resp-accordion" role="tab" aria-controls="tab_item-1"><span class="resp-arrow"></span>most read</h2>
            <!-- CẨM NANG -->
            <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
            <!-- block cẩm nang -->
                <?php
                    require "block/camnang_phai.php";
                ?>
            <!-- block cẩm nang -->
            </div>
            <!-- END CẨM NANG -->
          </div>
          <script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
          <script type="text/javascript">
            $(document).ready(function() {
              $('#horizontalTab').easyResponsiveTabs({
                type: 'default', //Types: default, vertical, accordion
                width: 'auto', //auto or any width like 600px
                fit: true // 100% fit in a container
              });
            });
          </script>
        </div>
      </div>
      <!-- đăng ký mail -->
        <?php
            require "block/dangky_mail.php";
        ?>
      <!-- end đăng ký mail -->
    </div>
    <div class="clearfix"> </div>
  </div>
</div>
<!-- //news-and-events -->
<!-- news-2-and-events -->
<div class="news">
  <div class="news-grids">
    <!-- Tin tức game-->
    <div class="col-md-8 news-grid-left">
      <h3>TIN GAME</h3>
      <ul>
        <!-- block tin game -->
          <?php
            require "block/tingame.php";
          ?>
        <!-- end block tin game -->
      </ul>
    </div>
    <!-- end Tin tức game -->
    <!-- video phải -->
    <div class="col-md-4 video-grids-right">
      <div class="sap_tabs">
        <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
          <ul class="resp-tabs-list">
            <li class="resp-tab-item grid1 resp-tab-active" aria-controls="tab_item-0" role="tab"><span>Video</span></li>
            <div class="clear"></div>
          </ul>
          <div class="resp-tabs-container">
            <h2 class="resp-accordion resp-tab-active" role="tab" aria-controls="tab_item-0"><span class="resp-arrow"></span>TIN HOT</h2>
            <!-- video hot -->
            <div class="tab-1 resp-tab-content resp-tab-content-active" aria-labelledby="tab_item-0" style="display:block">
              <!-- block video -->
                <?php
                    require "block/video_phai.php";
                ?>
              <!-- end block video -->
            </div>
            <!-- END video hot -->
            <h2 class="resp-accordion" role="tab" aria-controls="tab_item-1"><span class="resp-arrow"></span>TIN HOT</h2>
          </div>
        </div>
      </div>
    </div>
    <!-- end video phải -->
    <div class="clearfix"> </div>
  </div>
</div>
<!-- //news-2-and-events -->
<!-- Hình ảnh -->
<div class="col-sm-12">
  <div class="gallery">
    <h3>HÌNH ẢNH</h3></h3>
    <div class="gallery-grids">
      <div class="col-md-4 gallery-grid">
        <div class="gallery-grd">
          <a href="images/27.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
            <img src="images/27.jpg" alt=" " class="img-responsive">
          </a>
        </div>
        <div class="gallery-grd grd">
          <a href="images/28.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
            <img src="images/28.jpg" alt=" " class="img-responsive">
          </a>
        </div>
      </div>
      <div class="col-md-4 gallery-grid">
        <div class="gallery-grd">
          <a href="images/29.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
            <img src="images/29.jpg" alt=" " class="img-responsive">
          </a>
        </div>
        <div class="gallery-grd grd">
          <a href="images/30.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
            <img src="images/30.jpg" alt=" " class="img-responsive">
          </a>
        </div>
      </div>
      <div class="col-md-4 gallery-grid">
        <div class="gallery-grd">
          <a href="images/31.png" rel="title" class="b-link-stripe b-animate-go  thickbox">
            <img src="images/31.png" alt=" " class="img-responsive mobile1">
          </a>
        </div>
      </div>
      <div class="clearfix"> </div>
    </div>
  </div>
</div>
<!-- end hình ảnh -->
