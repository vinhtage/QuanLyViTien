<?php
        //Lấy thông tin từ trang chính
            $tentaikhoan=$_POST['tentaikhoan'];
            $matkhau=$_POST['matkhau'];
            $email=$_POST['email'];
            $quyen=$_POST['quyen'];
        //Kết nối đến SQL
            $database = mysqli_connect('localhost','root','','quanlyvitien');
            if(!$database){
                echo "Error!";
            }else{
                $kt= mysqli_query($database,"SELECT * FROM t_taikhoan WHERE tendangnhap='$tentaikhoan'");
                if(mysqli_num_rows($kt)>0){
                    echo "Trungvi";
                }else{
                    mysqli_query($database,"INSERT INTO t_taikhoan VALUES ('0','$tentaikhoan','$matkhau','$email','$quyen','user.png')");
                    header("location:themTKadmin.php");
                }
            }
?>