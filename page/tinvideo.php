<?php
    $idTL=$_GET["idTL"];
    settype($idTL,"int");
?>
<div class="news">
    <div class="news-grids">
        <!-- Tin tức esports -->
        <div class="col-md-8 news-grid-left">
            <h3>Video</h3>
            <ul>
                <!-- tin esports ở đây -->
                <?php
                require "block/tintheotheloai.php";
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