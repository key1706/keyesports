<?php
ob_start();
session_start();
if(!isset($_SESSION['idUser'])){
    header('location:../index.php');
}
?>
<?php

require '../lib/dbCon.php';
require '../lib/quantri.php';

?>
<?php
require_once 'block/header.php'
?>
    <!-- viet o day -->
    <div class="outter-wp">

        <div class="cal-main" >
            <div class="outter-wp">
                <?php require 'block/today.php';?>
                <div class="clearfix"></div>
            <div class="charts">
                <div class="chrt-inner">
                    <div class="chrt-bars">

                        <div class="col-md-6 chrt-two">
                            <h3 class="sub-tittle">Loại Tin Được Xem Nhiều Nhất!!</h3>
                            <canvas id="myPieChart " width="400" height="400"></canvas>
                            <script>
                                var ctx = document.getElementById("myPieChart ");
                                var myPieChart  = new Chart(ctx, {
                                    type: 'pie',
                                    data: {
                                        labels: [
                                            <?php $test=test(); while ($row_charts=mysql_fetch_array($test)){echo '"'.$row_charts['TenTL'].'",';}?>
                                        ],
                                        datasets: [
                                            {
                                                data: [<?php $chart=test(); while ($row_chart=mysql_fetch_array($chart)){echo $row_chart['SoXem'].",";}?>],
                                                backgroundColor: [
                                                    "#FF6384",
                                                    "#36A2EB",
                                                    "#FFCE56",
                                                    "#36ffb1"
                                                ],
                                                hoverBackgroundColor: [
                                                    "#FF6384",
                                                    "#36A2EB",
                                                    "#FFCE56",
                                                    "#36ffb1"
                                                ]
                                            }]
                                    },
                                    options: {
                                        animation:{
                                            animateScale:true
                                        }
                                    }
                                });
                            </script>
                        </div>
                        <div class="col-md-6 chrt-three">
                            <h3 class="sub-tittle">Lượt Xem Web Trong 7 Ngày!!</h3>
                            <div>
                            <canvas id="myChart" width="400" height="400"></canvas>
                            <script>
                                var ctx = document.getElementById("myChart");
                                var myChart = new Chart(ctx, {
                                    type: 'line',
                                    data: {
                                        labels: ["14", "15", "16", "17", "18", "19", "20"],
                                        datasets: [
                                            {
                                                label: "Số Lượt Người Xem",
                                                fill: false,
                                                lineTension: 0.1,
                                                backgroundColor: "rgba(75,192,192,0.4)",
                                                borderColor: "rgba(75,192,192,1)",
                                                borderCapStyle: 'butt',
                                                borderDash: [],
                                                borderDashOffset: 0.0,
                                                borderJoinStyle: 'miter',
                                                pointBorderColor: "rgba(75,192,192,1)",
                                                pointBackgroundColor: "#fff",
                                                pointBorderWidth: 1,
                                                pointHoverRadius: 5,
                                                pointHoverBackgroundColor: "rgba(75,192,192,1)",
                                                pointHoverBorderColor: "rgba(220,220,220,1)",
                                                pointHoverBorderWidth: 2,
                                                pointRadius: 1,
                                                pointHitRadius: 10,
                                                data: [2450, 1203, 2140, 1504, 1954, 1210, 800],
                                                spanGaps: false,
                                            }
                                        ]
                                    },
                                    options: {
                                        scales: {

                                            xAxes: [{
                                                display: true
                                            }],

                                        }
                                    }
                                });
                            </script>
                        </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
        </div>


        </div>
        <!-- end viet o day -->
        <div class="clearfix"> </div>
    </div>
    <!--/float-charts-->


    </div>
    <!--/charts-inner-->
    </div>
<?php
require_once 'block/footer.php';
?>