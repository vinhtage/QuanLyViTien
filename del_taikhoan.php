<?php 
    $database = mysqli_connect('localhost','root','','quanlyvitien');
    if(!$database){echo "Error!!";}
    else{
        $taikhoan = $_REQUEST['tendangnhap'];
        mysqli_query($database,"DELETE FROM `t_taikhoan` WHERE `tendangnhap`='$taikhoan'");
        header('location:admin.php');
    }
?>