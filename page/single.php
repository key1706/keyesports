<?php

if (isset($_GET["idTin"])){
    $idTin=$_GET["idTin"];
    settype($idTin,"int");
}
else{
    $idTin=1;
}
CapNhatSoLanXemTin($idTin);
$tin=ChiTietTin($idTin);
$row_tin=mysql_fetch_array($tin);
?>
<div class="single">
  <div class="container">
    <div class="single-grid">
      <div class="col-md-8 blog-left">
        <div class="blog-left-grid">
          <div class="blog-leftl">
            <h4><?php echo date('d-m-Y',strtotime($row_tin['Ngay'])); ?></h4>
            <a href="#"><i class="glyphicon glyphicon-eye-open" aria-hidden="true"></i><?php  echo $row_tin['SoLanXem'] ?></a>
          </div>
          <div class="blog-leftr">
              <div
                      class="fb-like"
                      data-share="true"
                      data-width="450"
                      data-show-faces="true">
              </div>
              <h2 style="color:rgb(244, 125, 58);"><?php  echo $row_tin['TieuDe'] ?></h2>
              <p>
                  <?php echo $row_tin['TomTat']  ?>
              </p>
              <p>
                  ____________________________________________________________________________________________________________________
              </p>
              <br>
              <!-- nội dung -->
                <?php  echo $row_tin['Content'] ?>
              <!-- end nội dung -->
              <br>
              <p>
                  ____________________________________________________________________________________________________________________
              </p>
          </div>
          <div class="clearfix"> </div>
          <!--<div class="admin-text">
            <h5>Written By Admin Name</h5>
            <div class="admin-text-left">
              <a href="#"><img src="images/icon1.png" alt="" /></a>
            </div>
            <div class="admin-text-right">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              <span>View all posts by:<a href="#"> Admin </a></span>
            </div>
            <div class="clearfix"> </div>
          </div>
          <!--<div class="response">
            <h4>Responses</h4>
            <div class="media response-info">
              <div class="media-left response-text-left">
                <a href="#">
                  <img class="media-object" src="images/icon1.png" alt="" />
                </a>
                <h5><a href="#">Đú Đỡn Đat </a></h5>
              </div>
              <div class="media-body response-text-right">
                <p>Hóng kèo Haru và Score...</p>
                <ul>
                  <li>October 25, 2017</li>
                  <li><a href="single.html">Trả Lời</a></li>
                </ul>
                <div class="media response-info">
                  <div class="media-left response-text-left">
                    <a href="#">
                      <img class="media-object" src="images/icon1.png" alt="" />
                    </a>
                    <h5><a href="#">Trinh Ngoc</a></h5>
                  </div>
                  <div class="media-body response-text-right">
                    <p>Haru đang top 2 thách đấu Score có tuổi à</p>
                    <ul>
                      <li>October 25, 2016</li>
                      <li><a href="single.html">Reply</a></li>
                    </ul>
                  </div>
                  <div class="clearfix"> </div>
                </div>
              </div>
              <div class="clearfix"> </div>
            </div>
            <div class="media response-info">
              <div class="media-left response-text-left">
                <a href="#">
                  <img class="media-object" src="images/icon1.png" alt="" />
                </a>
                <h5><a href="#">Admin</a></h5>
              </div>
              <div class="media-body response-text-right">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <ul>
                  <li>October 25, 2016</li>
                  <li><a href="single.html">Reply</a></li>
                </ul>
              </div>
              <div class="clearfix"> </div>
            </div>
          </div>-->
          <div class="coment-form">
            <h4>Bình Luận</h4>
              <div class="fb-comments" data-href="" data-colorscheme="light" data-numposts="5" data-width="500"></div>
          </div>
        </div>
      </div>
      <div class="col-md-4 video-grids-right">
        <div class="sap_tabs">
          <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
            <ul class="resp-tabs-list">
              <li class="resp-tab-item grid1 resp-tab-active" aria-controls="tab_item-0" role="tab"><span>Tin Liên Quan</span></li>
              <li class="resp-tab-item grid2" aria-controls="tab_item-1" role="tab"><span>Cẩm Nang</span></li>
              <div class="clear"></div>
            </ul>
            <div class="resp-tabs-container">
              <h2 class="resp-accordion resp-tab-active" role="tab" aria-controls="tab_item-0"><span class="resp-arrow"></span></h2>
              <!-- tin hot -->
              <div class="tab-1 resp-tab-content resp-tab-content-active" aria-labelledby="tab_item-0" style="display:block">
                    <!-- block o day-->
                  <?php
                  $tinhot=TinCungLoai($idTin,$row_tin['idLT']);
                  while ($row_tinhot=mysql_fetch_array($tinhot)){
                      ?>
                      <div class="facts">
                          <div class="tab_list">
                              <img src="images/hinh_baiviet/<?php echo $row_tinhot['urlHinh']?>" alt=" " class="img-responsive">
                          </div>
                          <div class="tab_list1">
                              <ul>
                                  <li><a href="#"><?php  echo $row_tinhot['TenLT'] ?></a> <label>|</label></li>
                                  <li><?php echo $row_tinhot['Ngay'] ?></li>
                              </ul>
                              <p><a href="index.php?p=single&idTin=<?php echo $row_tinhot['idTin'] ?>"><?php echo $row_tinhot['TieuDe'] ?></a></p>
                          </div>
                          <div class="clearfix"> </div>
                      </div>
                      <?php
                  }
                  ?>
                  <!-- end block -->
              </div>
              <!-- END tin hot -->
              <h2 class="resp-accordion" role="tab" aria-controls="tab_item-1"><span class="resp-arrow"></span>most read</h2>
              <!-- CẨM NANG -->
              <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
               <!-- bloc oday -->
                  <?php
                  require "block/camnang_phai.php";
                  ?>
                  <!-- end block-->
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
        <div class="news-grid-rght2">
          <h3>ĐĂNG KÝ ĐỂ NHẬN TIN</h3>
          <p>Xin hãy để lại mail để chúng tôi có thể thông báo những tin mới nhất cho cái bạn!</p>
          <form>
            <input type="text" value="Nhập mail của bạn tại đây ^^" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Nhập mail của bạn tại đây!!';}">
            <input type="submit" value="Submit">
          </form>
        </div>
        <!-- end đăng ký mail -->
      </div>
      <div class="clearfix"> </div>
    </div>
  </div>
</div>
