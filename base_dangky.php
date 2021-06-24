<?php
        $username = $_POST['username'];
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $role = '0';
        $img = 'user.png';
        $db = mysqli_connect('localhost','root','','quanlyvitien');
        if(!$db){echo "ERROR Connect!";
        }else{
            $SQL_DK="INSERT INTO t_taikhoan VALUES ('0','".$username."','".$email."','".$pass."','$role','$img')";
            $KT = mysqli_query($db,"SELECT * FROM t_taikhoan WHERE tendangnhap='".$username."' OR email='$email'");
            $r = mysqli_fetch_array($KT);
            if(isset($_POST['submit'])){
                if(mysqli_num_rows($KT)>0){
                    header("location:register.php?dkerror=1");
                }else{
                    mysqli_query($db,$SQL_DK);
                    header("location:index.php");
                } 
            }
        }
?>