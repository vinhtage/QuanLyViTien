<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title>Ứng dụng quản lý ví tiền</title>
        <meta name="description" content="Ứng dụng quản lý ví tiền" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <link rel="apple-touch-icon" href="./images/logo2.png" />
        <link rel="shortcut icon" href="./images/logo2.png" />

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css" />
        <link rel="stylesheet" href="assets/css/cs-skin-elastic.css" />
        <link rel="stylesheet" href="assets/css/style.css" />
        <link rel="stylesheet" href="./assets/css/all.min.css">

        <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet" />

        <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet" />

        <style>
            .traffic-chart {
                min-height: 335px;
            }
            #flotPie1 {
                height: 150px;
            }
            #flotPie1 td {
                padding: 3px;
            }
            #flotPie1 table {
                top: 20px !important;
                right: -10px !important;
            }
            .chart-container {
                display: table;
                min-width: 270px;
                text-align: left;
                padding-top: 10px;
                padding-bottom: 10px;
            }
            #flotLine5 {
                height: 105px;
            }

            #flotBarChart {
                height: 150px;
            }
            #cellPaiChart {
                height: 160px;
            }
        </style>
    </head>

    <body>
    <?php session_start();?>
        <!-- Left Panel -->
        <aside id="left-panel" class="left-panel">
            <nav class="navbar navbar-expand-sm navbar-default">
                <div id="main-menu" class="main-menu collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active">
                            <a href="tongquan.php"><i class="menu-icon fa fa-laptop"></i>Tổng quan </a>
                        </li>
                        <li class="menu-title">Tính năng</li>
                        <li class="active">
                            <a href="note.php"><i class="menu-icon fa fa-edit"></i>Ghi chép </a>
                        </li>
                        <li class="active">
                            <a href="wallet.php"><i class="menu-icon fa fa-wallet"></i>Ví </a>
                        </li>
                        <li class="active">
                            <a href="report1.php"><i class="menu-icon fas fa-chart-pie"></i>Báo cáo chi </a>
                            <a href="report2.php"><i class="menu-icon fas fa-chart-pie"></i>Báo cáo thu</a>
                        </li>
                        <li class="menu-title">Khác</li>
                        <li class="menu-item-has-children dropdown active">
                            <a href="utilities.php" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Tiện ích</a>
                            <ul class="sub-menu children dropdown-menu active">
                                <li><i class="menu-icon fa fa-users"></i><a href="page-login.html">Chia tiền</a></li>
                                <li><i class="menu-icon fa fa-paper-plane"></i><a href="pages-forget.html">Tính lãi vay</a></li>
                                <li><i class="menu-icon fa fa-save"></i><a href="page-register.html">Xuất thu chi PDF</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </aside>
        <!-- /#left-panel -->
        <!-- Right Panel -->
        <div id="right-panel" class="right-panel">
            <!-- Header-->
            <header id="header" class="header">
                <div class="top-left">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="./"><img src="images/logo.png" alt="Logo" /></a>
                        <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo" /></a>
                        <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                    </div>
                </div>
                <div class="top-right">
                    <div class="header-menu">
                        <div class="header-left">
                            
                        </div>

                        <div class="user-area dropdown float-right">
                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php include('avatar.php') ?>
                            </a>

                            <div class="user-menu dropdown-menu">
                                <a class="nav-link" href="thongtincanhan.php"><i class="fa fa- user"></i>Thông tin cá nhân</a>

                                <a class="nav-link" href="#"><i class="fa fa -cog"></i>Cài đặt</a>

                                <a class="nav-link" href="index.php"><i class="fa fa-power -off"></i>Đăng xuất</a>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- /#header -->
            <!-- Content -->
            <div class="content">
                <!-- Animated -->
                <div class="animated fadeIn">
                    <!-- Widgets  -->
                    <?php include('fullwdheader.php') ?>
                    <!-- /Widgets -->
                    <!--  Traffic  -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="box-title">Biểu đồ thu chi tháng này</h4>
                            </div>
                            <div class="row">
                                
                                    <div class="card-body">
                                        <canvas id="pieChart"></canvas>
                                        <!-- <div id="barChart" class="barChart"></div> -->
                                    </div>
                            </div> 
                            <!-- /.row -->
                            <div class="card-body"></div>
                        </div>
                    </div><!-- /# column -->

                    <div class="col-lg-6">
                        <div class="card">
                            <img class="card-img-top" src="https://d1e00ek4ebabms.cloudfront.net/production/6b7c5fa6-b824-4430-b544-2102ad555fd1.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title mb-3">Quản lý tài chính thế nào cho tốt ?</h4>
                                <p class="card-text">Quản lý tài chính cá nhân hiệu quả không phải là công việc đơn giản, không thể thực hiện ngày một ngày hai mà thành công. Tuy nhiên, bạn có thể bắt đầu từ những bước nhỏ nhất, đơn giản nhất. Đó là tập thói quen ghi chép lại các chi phí mình đã sử dụng mỗi ngày....</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  /Traffic -->
                    <div class="clearfix"></div>
                    <!-- Tài khoản -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="box-title">Thông tin các ví</h4>
                            </div>
                            <div class="col-lg-12">
                            <?php include 'thongtinvi.php'?>
                            </div>
                        </div>
                    </div><!-- /# column -->
                </div>   
                    <!-- /.Tài khoản -->
                </div>
                <!-- .animated -->
            </div>
            <!-- /.content -->
            <div class="clearfix"></div>
            <!-- Footer -->
            <footer class="site-footer">
                <div class="footer-inner bg-white">
                    <div class="row">
                        <div class="col-sm-6">
                            Copyright &copy; 2018 Ela Admin
                        </div>
                        <div class="col-sm-6 text-right">Designed by <a href="https://colorlib.com">Colorlib</a></div>
                    </div>
                </div>
            </footer>
            <!-- /.site-footer -->
        </div>
        <!-- /#right-panel -->

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
        <script src="assets/js/main.js"></script>

        <!--  Chart js -->
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.bundle.min.js"></script>
        <script src="assets/js/init/chartjs-init.js"></script>

        <!--Chartist Chart-->
        <script src="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chartist-plugin-legend@0.6.2/chartist-plugin-legend.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/jquery.flot@0.8.3/jquery.flot.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/flot-pie@1.0.0/src/jquery.flot.pie.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/flot-spline@0.0.1/js/jquery.flot.spline.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/simpleweather@3.1.0/jquery.simpleWeather.min.js"></script>
        <script src="assets/js/init/weather-init.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/moment@2.22.2/moment.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.js"></script>
        <script src="assets/js/init/fullcalendar-init.js"></script>
        <!--Local Stuff-->
        
    <script>
       var ctx = document.getElementById( "pieChart" );
    ctx.height = 160;
    var myChart = new Chart( ctx, {
        type: 'pie',
        data: {
            datasets: [ {
                data: [ <?php include 'sodo_thongkethu.php'?> , <?php include 'sodo_thongkechi.php'?>,10],
                backgroundColor: [
                                    "rgba(0, 194, 146,0.9)",
                                    "rgb(243, 4, 13,0.7)",
                                    "rgba(0, 194, 146,0.9)",
                                ],
                hoverBackgroundColor: [
                                    "rgba(0, 194, 146,0.9)",
                                    "rgb(243, 4, 13,0.7)",
                                    "rgba(0, 194, 146,0.9)",
                                ]

                            } ],
            labels: [
                            "Thu",
                            "Chi"
                        ]
        },
        options: {
            responsive: true
        }
    } );
    </script>
    </body>
</html>
