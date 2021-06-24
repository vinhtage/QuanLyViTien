<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title>Ứng dụng quản lý ví tiền</title>
        <meta name="description" content="Ứng dụng quản lý chi tiêu" />
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

        <link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet" />

        <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
        <script src="assets/js/main.js"></script>
        
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
                        <div class="user-area dropdown float-right">
                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php include('avatar.php') ?>
                            </a>

                            <div class="user-menu dropdown-menu">
                                <a class="nav-link" href="thongtincanhan.php"><i class="fa fa- user"></i>Thông tin cá nhân</a>

                                <a class="nav-link" href="#"><i class="fa fa -cog"></i>Cài đặt</a>

                                <a class="nav-link" href="base_dangxuat.php"><i class="fa fa-power -off"></i>Đăng xuất</a>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- /#header -->
            <!-- STARTContent -->
            <div class="content">
                <!-- Animated -->
                <div class="animated fadeIn">
                    <!-- Widgets  -->
                    <?php include('fullwdheader.php') ?>
                    <!-- /Widgets -->
                    <!--  Conten  -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="box-title">Thêm ví tiền</h4>
                                </div>
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body card-block">
                                            <form action="add_vitien.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                                                <div class="row">
                                                    <!--  -->
                                                    <div class="col-lg-6">
                                                        <div class="row form-group">
                                                            <div class="col col-md-3"><label for="tenvitien" class=" form-control-label">Tên ví tiền</label></div>
                                                            <div class="col-12 col-md-9"><input type="text" id="tenvitien" name="tenvitien" placeholder="Nhập tên ví" class="form-control" required></div>
                                                        </div>
                                                        <div class="row form-group">
                                                            <div class="col col-md-3"><label for="loaivi" class=" form-control-label">Loại ví</label></div>
                                                            <div class="col-12 col-md-9">
                                                                <select name="loaivi" id="loaivi" class="form-control">
                                                                <?php include 'base_loaivi.php'?>
                                                                </select>
                                                            </div>
                                                        </div>  
                                                    </div> 
                                                    <!--  -->
                                                    <div class="col-lg-6">
                                                        <div class="row form-group">
                                                            <div class="col col-md-3"><label for="sodu" class="form-control-label">Số dư ban đầu</label></div>
                                                            <div class="col-12 col-md-9"><input type="number" id="sodu" name="sodu" placeholder="0" class="form-control"></div>
                                                        </div>
                                                        <div class="row form-group" hidden>
                                                                <select name="taikhoan" id="taikhoan" class="form-control">
                                                                <?php 
                                                                    $database = mysqli_connect('localhost','root','','quanlyvitien');
                                                                    if(!$database){
                                                                        echo "Lỗi Kết Nối";
                                                                    }else{
                                                                        $pb= mysqli_query($database,"SELECT * FROM `t_taikhoan`");
                                                                        
                                                                        if(mysqli_num_rows($pb)>0){
                                                                            while($r = mysqli_fetch_array($pb)){
                                                                                echo "<option value='".$_SESSION['id']."'>".$_SESSION['user'].'-'.$_SESSION['id']."</option>";
                                                                            }
                                                                        }
                                                                    }
                                                                ?>
                                                                </select>
                                                        </div>
                                                    </div>
                                                    <!--  -->
                                                    <!--  -->
                                                    <div class="col-lg-12">
                                                        <div class="row form-group">
                                                                <div class="col col-md-3"><label for="select" class=" form-control-label">Ghi chú</label></div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="row form-group">
                                                                <div class="col-12"><textarea name="ghichu" id="ghichu" rows="3" placeholder="Ghi chú" class="form-control" style="width: 100%;"></textarea></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--  -->
                                                </div>
                                                <!--  -->
                                                <button type="submit" name="submit" class="btn btn-primary btn-sm">
                                                    <i class="fa fa-dot-circle-o"></i> Lưu lại
                                                </button>
                                                <button type="reset" class="btn btn-danger btn-sm">
                                                    <i class="fa fa-ban"></i> Làm mới
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /# column -->
                    </div>
                                                                
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="box-title">Thông tin các ví</h4>
                                </div>
                                <div class="col-lg-12">
                                    <!-- Bảng thông tin ví-->
                                    <?php include'thongtinvi.php' ?>
                                    <!-- END bảng thông tin ví -->
                                </div>
                            </div>
                        </div><!-- /# column -->
                    </div>
                    <!--  /Conten -->
                    <div class="clearfix"></div>
                </div>
                <!-- .animated -->
            </div>
            <!-- ENDcontent -->
            <div class="clearfix"></div>
            <!-- STARTFooter -->
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
            <!-- ENDfooter -->
        </div>
        <!-- /#right-panel -->
    </body>
</html>
