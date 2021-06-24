<?php
    session_start();
    $submit = $_POST['submit'];
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $connect = new mysqli_connect("localhost","root","","quanlyvitien");
    mysql_set_charset($connect,"utf8");
    if ($connect->connect_error){
        var_dump($connect->connect_error);
        die();
    }
        $query = "SELECT * FROM t_taikhoan WHERE tendangnhap='".$user."' AND matkhau='".$pass."'";
        $result = mysqli_query($connect,$query);
        $row = mysqli_fetch_array($result);
    if(isset($submit)){
        if (mysqli_num_rows($result)<1){
            header("location:index.php?usererror=1");
        } else if ($row[quyen=='1']){
            header("location:admin.php");
        } else {
            $_SESSION["id"] = $row['matk'];
            $_SESSION["user"] = $row['tendangnhap'];

            $a = "SELECT * FROM t_mucchi WHERE matk = '".$r['matk']."'";
            $b = mysqli_query($connect, $a);
            if(mysqli_num_rows($b)<1){
                $c = "INSERT INTO `t_mucchi` (`mamucchi`, `tenmucchi`, `hangchi`, `matk`) 
                      VALUES
                      ('0', 'Dịch vụ sinh hoạt', '1', '".$_SESSION['id']."'),
                      ('0', 'Đi lại', '1', '".$_SESSION['id']."'),
                      ('0', 'Ăn uống', '1', '".$_SESSION['id']."'),
                      ('0', 'Con cái', '1', '".$_SESSION['id']."'),
                      ('0', 'Trang phục', '1', '".$_SESSION['id']."'),
                      ('0', 'Hiếu hỉ', '1', '".$_SESSION['id']."'),
                      ('0', 'Sức khoẻ', '1', '".$_SESSION['id']."'),
                      ('0', 'Nhà cửa', '1', '".$_SESSION['id']."'),
                      ('0', 'Hưởng thụ', '1', '".$_SESSION['id']."'),
                      ('0', 'Phát triển bản thân', '1', '".$_SESSION['id']."')
                      ('0', 'Cho vay', '2', '".$_SESSION['id']."'),
                      ('0', 'Trả nợ', '2', '".$_SESSION['id']."')";
                mysqli_query($connect, $c);
                header("location:tongquan.php");
            }else {
                header("location:tongquan.php");
            }
        }
    }
    
    $connect->close();
?>