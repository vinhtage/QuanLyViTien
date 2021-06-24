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
        <link rel="stylesheet" href="assets/css/lib/datatable/dataTables.bootstrap.min.css">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

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
                            <ul class="sub-menu children dropdown-menu">
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
                          <!-- Thêm tính năng sau -->
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
                <!--  Traffic  -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Lịch sử thu tiền</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <?php
                                    $database = mysqli_connect('localhost','root','','quanlyvitien');
                                    if(!$database){
                                    echo "Lỗi Kết Nối";
                                    }else{
                                    $sql_select = "SELECT * FROM ((t_thutien LEFT JOIN t_mucthu ON t_thutien.mamucthu=t_mucthu.mamucthu)LEFT JOIN t_vitien ON t_thutien.mavi=t_vitien.mavi) WHERE t_thutien.matk= '".$_SESSION["id"]."' ";
                                    $kq = mysqli_query($database,$sql_select);
                                    echo "<thead>";
                                        echo "<tr>";
                                        echo "<th>Ví thu</th>";
                                        echo "<th>Loại thu</th>";
                                        echo "<th>Ngày thu</th>";
                                        echo "<th>Số tiền thu</th>";
                                        echo "<th>Ghi chú</th>";
                                        echo "<th>Hưởng từ ai</th>";
                                        echo "<th>Sự kiện</th>";
                                        echo "</tr>";
                                    echo "</thead>"; 
                                    $i=0;
                                    if(mysqli_num_rows($kq)>0){
                                    while($r = mysqli_fetch_array($kq)){
                                        $i++;
                                        echo"<tbody>";
                                            echo "<tr>";
                                            echo "<td>".$r['tenvi']."</td>";
                                            echo "<td>".$r['tenmucthu']."</td>";
                                            echo "<td>".$r['ngaythu']."</td>";
                                            $ddtienwidget2 = number_format($r['sotienthu']); 
                                            echo "<td>".$ddtienwidget2."₫</td>";
                                            echo "<td>".$r['ghichu']."</td>";
                                            echo "<td>".$r['thuboiai']."</td>";
                                            echo "<td>".$r['sukien']."</td>";
                                            echo "</tr>";
                                        echo "</tbody>";
                                            }               
                                        }
                                    }
                                    ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  /Traffic -->
                    <div class="clearfix"></div>
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

        <script src="assets/js/lib/data-table/datatables.min.js"></script>
        <script src="assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
        <script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
        <script src="assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
        <script src="assets/js/lib/data-table/jszip.min.js"></script>
        <script src="assets/js/lib/data-table/vfs_fonts.js"></script>
        <script src="assets/js/lib/data-table/buttons.html5.min.js"></script>
        <script src="assets/js/lib/data-table/buttons.print.min.js"></script>
        <script src="assets/js/lib/data-table/buttons.colVis.min.js"></script>
        <script src="assets/js/init/datatables-init.js"></script>


        
        <script type="text/javascript">
            $(document).ready(function() {
              $('#bootstrap-data-table-export').DataTable();
          } );
      </script>
    </body>
</html>
