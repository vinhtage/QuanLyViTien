<?php
            session_start();
        //Lấy thông tin từ trang chính
            $mathutien = $_POST['mathutien'];
            //#Mã thu tiền random không trùng nhau.
            $sotienthu=$_POST['sotienthu'];
            $ngaythu=$_POST['ngaythu'];
            $mavi=$_POST['mavi'];
            $matk=$_POST['matk'];
            $mamucthu=$_POST['mucthu'];
            $ghichu=$_POST['ghichu'];
            $sukien=$_POST['sukien'];
            $thuchoai=$_POST['thuchoai'];
        //Kết nối đến SQL
            $database = mysqli_connect('localhost','root','','quanlyvitien');
            if(!$database){
                echo "Lỗi Kết Nối";
            }else{
                $SQL_INSERT="INSERT INTO t_thutien VALUES ('".$mathutien."','".$sotienthu."','".$ngaythu."','".$mavi."','".$matk."','".$mamucthu."','". $ghichu."','". $sukien."','". $thuchoai."')";
                $SQL_KT="SELECT * FROM t_thutien WHERE mathutien='".$mathutien."'";
                $thutien = "UPDATE t_vitien 
                SET t_vitien.sodu = t_vitien.sodu + (SELECT `sotienthu` FROM `t_thutien` WHERE t_thutien.mathutien='". $mathutien."')  
                WHERE t_vitien.mavi = '". $mavi."' AND matk = '".$_SESSION["id"]."'";
                $kt= mysqli_query($database,$SQL_KT);
                if(mysqli_num_rows($kt)>0){
                    echo "Trùng tên ví";
                }else{
                    mysqli_query($database,$SQL_INSERT);
                    mysqli_query($database, $thutien);
                    echo  $SQL_INSERT;
                    echo $thutien;
                    header("location:note.php");
                }
            }
?>