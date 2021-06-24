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
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="box-title">Ghi chép chi tiền</h4>
                            </div>
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body card-block">
                                        <form action="add_chitien.php" method="post" id='form' enctype="multipart/form-data" class="form-horizontal">
                                            <div class="row">
                                                <!--  -->
                                                <div class="col-lg-6">
                                                    <div class="row form-group" hidden>
                                                        <select name="matk" id="matk" class="form-control">
                                                            <?php 
                                                                $database = mysqli_connect('localhost','root','','quanlyvitien');
                                                                if(!$database){
                                                                    echo "Lỗi Kết Nối";
                                                                }else{
                                                                    $pb= mysqli_query($database,"SELECT * FROM `t_taikhoan` ");
                                                                        
                                                                    if(mysqli_num_rows($pb)>0){
                                                                        while($r = mysqli_fetch_array($pb)){
                                                                            echo "<option value='".$_SESSION['id']."'>".$_SESSION['user'].'-'.$_SESSION['id']."</option>";
                                                                        }
                                                                    }
                                                                }
                                                            ?>
                                                        </select>
                                                    </div>
                                                    <!-- Xử lý mã ghi chép -->
                                                    <input type="text" id="machitien" name="machitien" class="form-control" value='<?php echo substr(md5(time()), 0, 16);?>'hidden>
                                                    <div class="row form-group">
                                                        <div class="col col-md-3"><label for="mucchi" class=" form-control-label">Mục chi</label></div>
                                                        <div class="col-12 col-md-9">
                                                            <select name="mucchi" id="mucchi" class="form-control" required>
                                                            <optgroup label="Chi tiền">
                                                            <?php 
                                                                $database = mysqli_connect('localhost','root','','quanlyvitien');
                                                                if(!$database){
                                                                    echo "Lỗi Kết Nối";
                                                                }else{
                                                                    $pb= mysqli_query($database,"SELECT * FROM t_mucchi WHERE `hangchi`=1 AND matk= '".$_SESSION['id']."'");
                                                                    if(mysqli_num_rows($pb)>0){
                                                                        while($r= mysqli_fetch_array($pb)){
                                                                            echo "<option value='".$r['mamucchi']."'>".$r['tenmucchi']."</option>";
                                                                        }
                                                                    }
                                                                }
                                                            ?>
                                                            </optgroup>
                                                            <optgroup label="Vay nợ">
                                                            <?php 
                                                                $database = mysqli_connect('localhost','root','','quanlyvitien');
                                                                if(!$database){
                                                                    echo "Lỗi Kết Nối";
                                                                }else{
                                                                    $pb= mysqli_query($database,"SELECT * FROM `t_mucchi` WHERE `hangchi`=2 AND matk= '".$_SESSION['id']."' ");
                                                                    if(mysqli_num_rows($pb)>0){
                                                                        while($r= mysqli_fetch_array($pb)){
                                                                            echo "<option value='".$r['mamucchi']."'>".$r['tenmucchi']."</option>";
                                                                        }
                                                                    }
                                                                }
                                                            ?>
                                                            </optgroup>
                                                            </select>
                                                        </div>
                                                    </div>                      
                                                    <!-- // -->
                                                    <div class="row form-group">
                                                        <div class="col col-md-3"><label for="ghichu" class=" form-control-label">Ghi chú</label></div>
                                                        <div class="col-12 col-md-9">
                                                            <div class="row form-group">
                                                                <div class="col-12"><textarea name="ghichu" id="ghichu" rows="3" placeholder="Ghi chép" class="form-control" style="width: 100%;"></textarea></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col col-md-3"><label for="sukien" class=" form-control-label">Sự kiện</label></div>
                                                        <div class="col-12 col-md-9"><input type="text" id="sukien" name="sukien" class="form-control"></div>
                                                    </div>
                                                </div>
                                                <!--  -->
                                                <div class="col-lg-6">
                                                    <div class="row form-group">
                                                        <div class="col col-md-3"><label for="sotienchi" class="form-control-label">Số tiền chi</label></div>
                                                        <div class="col-12 col-md-9"><input type="number" id="sotienchi" name="sotienchi" data-type="currency" placeholder="0" class="form-control"></div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col col-md-3"><label for="mavi" class=" form-control-label">Tài khoản chi</label></div>
                                                        <div class="col-12 col-md-9">
                                                            <select name="mavi" id="mavi" class="form-control">
                                                            <?php
                                                                $i=1; 
                                                                $database = mysqli_connect('localhost','root','','quanlyvitien');
                                                                if(!$database){
                                                                    echo "Lỗi Kết Nối";
                                                                }else{
                                                                    $pb= mysqli_query($database,"SELECT * FROM `t_vitien` WHERE matk = '".$_SESSION['id']."'");
                                                                    if(mysqli_num_rows($pb)>0){
                                                                        while($r= mysqli_fetch_array($pb)){
                                                                            echo "<option value='".$r['mavi']."'>Ví ".$i++. ': ' .$r['tenvi']."</option>";
                                                                        }
                                                                    }
                                                                }
                                                            ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col col-md-3"><label for="ngaychi" class="form-control-label">Ngày chi</label></div>
                                                        <div class="col-12 col-md-9">
                                                            <div class="row form-group">
                                                            <?php 
                                                                $month = date('m');
                                                                $day = date('d');
                                                                $year = date('Y');

                                                                $today = $year . '-' . $month . '-' . $day;
                                                            ?>
                                                                <div class="col-12"><input type="date" value="<?php echo $today; ?>" name="ngaychi" id="ngaychi" class="form-control"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col col-md-3"><label for="chichoai" class=" form-control-label">Chi cho ai</label></div>
                                                        <div class="col-12 col-md-9"><input type="text" id="chichoai" name="chichoai" class="form-control"></div>
                                                    </div>
                                                </div>
                                                <!--  -->
                                            </div>
                                            <!--  -->
                                            <button type="submit" class="btn btn-primary btn-sm">
                                                <i class="fa fa-dot-circle-o"></i> Lưu lại
                                            </button>
                                            <button type="reset" class="btn btn-danger btn-sm">
                                                <i class="fa fa-ban"></i> Reset
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="card-body"></div> -->
                        </div>
                    </div><!-- /# column -->
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="box-title">Ghi chép thu tiền</h4>
                            </div>
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body card-block">
                                        <form action="add_thutien.php" method="post" id='form' enctype="multipart/form-data" class="form-horizontal">
                                            <div class="row">
                                                <!--  -->
                                                <div class="col-lg-6">
                                                    <div class="row form-group" hidden>
                                                        <select name="matk" id="matk" class="form-control">
                                                            <?php 
                                                                $database = mysqli_connect('localhost','root','','quanlyvitien');
                                                                if(!$database){
                                                                    echo "Lỗi Kết Nối";
                                                                }else{
                                                                    $pb= mysqli_query($database,"SELECT * FROM `t_taikhoan` ");
                                                                        
                                                                    if(mysqli_num_rows($pb)>0){
                                                                        while($r = mysqli_fetch_array($pb)){
                                                                            echo "<option value='".$_SESSION['id']."'>".$_SESSION['user'].'-'.$_SESSION['id']."</option>";
                                                                        }
                                                                    }
                                                                }
                                                            ?>
                                                        </select>
                                                    </div>
                                                    <!-- Xử lý mã ghi chép -->
                                                    <input type="text" id="mathutien" name="mathutien" class="form-control" value='<?php echo substr(md5(time()), 0, 16);?>'hidden>
                                                    <div class="row form-group">
                                                        <div class="col col-md-3"><label for="mucthu" class=" form-control-label">Mục thu</label></div>
                                                        <div class="col-12 col-md-9">
                                                            <select name="mucthu" id="mucthu" class="form-control">
                                                                <?php 
                                                                    $database = mysqli_connect('localhost','root','','quanlyvitien');
                                                                    if(!$database){
                                                                        echo "Lỗi Kết Nối";
                                                                    }else{
                                                                        $pb= mysqli_query($database,"SELECT * FROM t_mucthu WHERE hangthu = '1' AND matk= '".$_SESSION['id']."' ");
                                                                        if(mysqli_num_rows($pb)>0){
                                                                            while($r= mysqli_fetch_array($pb)){
                                                                                echo "<option value='".$r['mamucthu']."'>".$r['tenmucthu']."</option>";
                                                                            }
                                                                        }
                                                                    }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>                      
                                                    <!-- // -->
                                                    <div class="row form-group">
                                                        <div class="col col-md-3"><label for="ghichu" class=" form-control-label">Ghi chú</label></div>
                                                        <div class="col-12 col-md-9">
                                                            <div class="row form-group">
                                                                <div class="col-12"><textarea name="ghichu" id="ghichu" rows="3" placeholder="Ghi chép" class="form-control" style="width: 100%;"></textarea></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col col-md-3"><label for="sukien" class=" form-control-label">Sự kiện</label></div>
                                                        <div class="col-12 col-md-9"><input type="text" id="sukien" name="sukien" class="form-control"></div>
                                                    </div>
                                                </div>
                                                <!--  -->
                                                <div class="col-lg-6">
                                                    <div class="row form-group">
                                                        <div class="col col-md-3"><label for="sotienthu" class="form-control-label">Số tiền thu</label></div>
                                                        <div class="col-12 col-md-9"><input type="number" id="sotienthu" name="sotienthu" data-type="currency" placeholder="0" class="form-control"></div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col col-md-3"><label for="mavi" class=" form-control-label">Tài khoản thu</label></div>
                                                        <div class="col-12 col-md-9">
                                                            <select name="mavi" id="mavi" class="form-control">
                                                            <?php
                                                                $i=1; 
                                                                $database = mysqli_connect('localhost','root','','quanlyvitien');
                                                                if(!$database){
                                                                    echo "Lỗi Kết Nối";
                                                                }else{
                                                                    $pb= mysqli_query($database,"SELECT * FROM `t_vitien` WHERE matk = '".$_SESSION['id']."'");
                                                                    if(mysqli_num_rows($pb)>0){
                                                                        while($r= mysqli_fetch_array($pb)){
                                                                            echo "<option value='".$r['mavi']."'>Ví ".$i++. ': ' .$r['tenvi']."</option>";
                                                                        }
                                                                    }
                                                                }
                                                            ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col col-md-3"><label for="ngaythu" class="form-control-label">Ngày thu</label></div>
                                                        <div class="col-12 col-md-9">
                                                            <div class="row form-group">
                                                            <?php 
                                                                $month = date('m');
                                                                $day = date('d');
                                                                $year = date('Y');

                                                                $today = $year . '-' . $month . '-' . $day;
                                                            ?>
                                                                <div class="col-12"><input type="date" value="<?php echo $today; ?>" name="ngaythu" id="ngaythu" class="form-control"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col col-md-3"><label for="thuchoai" class=" form-control-label">Hưởng bởi ai</label></div>
                                                        <div class="col-12 col-md-9"><input type="text" id="thuchoai" name="thuchoai" class="form-control"></div>
                                                    </div>
                                                </div>
                                                <!--  -->
                                            </div>
                                            <!--  -->
                                            <button type="submit" class="btn btn-primary btn-sm">
                                                <i class="fa fa-dot-circle-o"></i> Lưu lại
                                            </button>
                                            <button type="reset" class="btn btn-danger btn-sm">
                                                <i class="fa fa-ban"></i> Reset
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="card-body"></div> -->
                        </div>
                    </div><!-- /# column -->
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
                            Copyright &copy; Quân ĐH8C1
                        </div>
                        <div class="col-sm-6 text-right">Thiết kế bởi <a href="https://colorlib.com">Colorlib</a></div>
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
        <!--Local Stuff-->                                                 
    </body>
</html>
