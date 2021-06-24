<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ứng dụng quản lý ví tiền</title>
    <meta name="description" content="Ứng dụng quản lý ví tiền">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="./images/logo2.png" />
    <link rel="shortcut icon" href="./images/logo2.png" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>
</head>
<!-- Chạy session để nhập lệnh quyền đang nhập hiện tại của người dùng -->
<?php
    session_start();
    unset($_SESSION["id"]);
    unset($_SESSION["user"]);
?>
<!-- end -->
<body class="bg-dark">
<form action="base_dangnhap.php" method="post">
    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.php">
                        <img class="align-content" src="images/logo.png" alt="">
                    </a>
                </div>
                <div class="login-form">
                    <form>
                        <div class="form-group">
                            <label>Tên đăng nhập</label>
                            <input type="text" name="username" class="form-control" placeholder="Nhập tên đăng nhập" required>
                        </div>
                        <div class="form-group">
                            <label>Mật khẩu</label>
                            <input type="password" name="password" class="form-control" placeholder="Nhập mật khẩu" required>
                        </div>
                        <div class="checkbox">
                            <label class="pull-right">
                                <a href="#">Quên mật khẩu?</a>
                            </label>
                        </div>
                        <button type="submit" name="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Đăng nhập</button>
                        <div class="register-link m-t-15 text-center">
                            <p>Không có tài khoản? <a href="register.php"> Đăng Ký Ngay</a></p>
                        </div>
                    </form>
                    <!-- Xử lý đăng nhập lỗi -->
                        <?php 
                            if(isset($_REQUEST['usererror']) == '1'){
                                echo '<font color="$FF0000"><p align="center">Sai username và password</p></font>';
                            } 
                        ?>
                    <!--  -->
                </div>
            </div>
        </div>
    </div>
</form>
    
</body>
</html>
