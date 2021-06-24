<?php
            session_start();
        //Lấy thông tin từ trang chính
            $machitien = $_POST['machitien'];
            //#Mã chi tiền random không trùng nhau.
            $sotienchi=$_POST['sotienchi'];
            $ngaychi=$_POST['ngaychi'];
            $mavi=$_POST['mavi'];
            $matk=$_POST['matk'];
            $mamucchi=$_POST['mucchi'];
            $ghichu=$_POST['ghichu'];
            $sukien=$_POST['sukien'];
            $chichoai=$_POST['chichoai'];
        //Kết nối đến SQL
            $database = mysqli_connect('localhost','root','','quanlyvitien');
            if(!$database){
                echo "Lỗi Kết Nối";
            }else{
                $SQL_INSERT="INSERT INTO t_chitien VALUES ('".$machitien."','".$sotienchi."','".$ngaychi."','".$mavi."','".$matk."','".$mamucchi."','". $ghichu."','". $sukien."','". $chichoai."')";
                $SQL_KT="SELECT * FROM t_chitien WHERE machitien='".$machitien."'";

                $Chitien = "UPDATE t_vitien 
                SET t_vitien.sodu = t_vitien.sodu - (SELECT `sotienchi` 
                FROM `t_chitien` 
                WHERE t_chitien.machitien='". $machitien."')  
                WHERE t_vitien.mavi = '". $mavi."' AND matk = '".$_SESSION["id"]."' ";

                $kt= mysqli_query($database,$SQL_KT);
                if(mysqli_num_rows($kt)>0){
                    echo "Trùng tên ví";
                }else{
                    mysqli_query($database,$SQL_INSERT);
                    mysqli_query($database, $Chitien);
                    echo  $SQL_INSERT;
                    echo $Chitien;
                    header("location:note.php");
                }
            }
?>