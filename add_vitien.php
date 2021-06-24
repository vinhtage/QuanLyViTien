<?php
//Lấy thông tin từ trang chính
session_start();
$matk = $_POST['taikhoan'];
$tenvi = $_POST['tenvitien'];
$loaivi = $_POST['loaivi'];
$sodu = $_POST['sodu'];
$ghichu = $_POST['ghichu'];
//Kết nối đến SQL
$db = mysqli_connect('localhost', 'root', '', 'quanlyvitien');
if (!$db)
{
    echo "Lỗi Kết Nối";
}
else
{
    $SQL_INSERT = "INSERT INTO `t_vitien` VALUES ('0','".$matk."','".$tenvi."','".$loaivi."','".$sodu."','".$ghichu."')";
    $SQL_KT = "SELECT * FROM t_vitien WHERE tenvi='" . $tenvi . "' AND matk = '".$_SESSION["id"]."' ";
    $kt = mysqli_query($db, $SQL_KT);
    if (mysqli_num_rows($kt) > 0)
    {
        $message = "Tên ví không hợp lệ!";
    }
    else
    {
        mysqli_query($db, $SQL_INSERT);
        header("location:wallet.php");
    }
}
?>