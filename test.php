<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Test Chart</title>
    <script src='Chart.min.js'></script>
    <script src='Chart.js'></script>
    <script src='Chart.bundle.js'></script>
    <script src='Chart.bundle.min.js'></script>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<div class="container">
    <h1 class="text-center">Test Thôi Nha</h1>
    <div class="row">
        <div class="col-lg-6">
            <canvas id="myPieChart" width="400" height="400"></canvas>
        </div>
        <script>
            var ctx = document.getElementById("myPieChart");
            var myPieChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: [
                        "Game",
                        "Sex",
                        "Tin"
                    ],
                    datasets: [
                        {
                            data: [300, 50, 100],
                            backgroundColor: [
                                "#FF6384",
                                "#36A2EB",
                                "#FFCE56"
                            ],
                            hoverBackgroundColor: [
                                "#FF6384",
                                "#36A2EB",
                                "#FFCE56"
                            ]
                        }]
                },
                options: {
                    animation:{
                        animateScale:true
                    }
                }});
        </script>
        <div class="col-lg-6">
            <canvas id="myRadarChart" width="400" height="400"></canvas>
        </div>
        <script>
            var ctx = document.getElementById("myRadarChart");
            var myRadarChart = new Chart(ctx, {
                type: 'radar',
                data: {
                    labels: ["báo", "Tin", "Game", "Kenh14", "JK", "GD", "Running"],
                    datasets: [
                        {
                            label: "Tin Của Tôi",
                            backgroundColor: "rgba(179,181,198,0.2)",
                            borderColor: "rgba(179,181,198,1)",
                            pointBackgroundColor: "rgba(179,181,198,1)",
                            pointBorderColor: "#fff",
                            pointHoverBackgroundColor: "#fff",
                            pointHoverBorderColor: "rgba(179,181,198,1)",
                            data: [65, 59, 90, 81, 56, 55, 40]
                        },
                        {
                            label: "Bài Viết",
                            backgroundColor: "rgba(255,99,132,0.2)",
                            borderColor: "rgba(255,99,132,1)",
                            pointBackgroundColor: "rgba(255,99,132,1)",
                            pointBorderColor: "#fff",
                            pointHoverBackgroundColor: "#fff",
                            pointHoverBorderColor: "rgba(255,99,132,1)",
                            data: [28, 48, 40, 19, 96, 27, 100]
                        }
                    ]
                },
                options: {
                    scale: {
                        reverse: true,
                        ticks: {
                            beginAtZero: true
                        }
                    }
                }});
        </script>
    </div>

</div>


</body>
</html>