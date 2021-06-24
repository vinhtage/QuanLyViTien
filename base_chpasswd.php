<?php
    session_start();
    $oldpass = $_POST['oldpass'];
    $newpass = $_POST['newpass'];
    $verypass = $_POST['verypass'];
    $id = $_SESSION["id"];

    $connect = mysqli_connect('localhost','root','','quanlyvitien');
    if(!$connect){echo "Error!!";   
    }else{
        $query = "SELECT * FROM t_taikhoan WHERE matk = '".$id."' ";
        $result = mysqli_query($connect,$query);
        $row = mysqli_fetch_array($result);
        if ($oldpass == $row["matkhau"] && $newpass == $row["confirmPassword"]) {

            mysqli_query($con, "UPDATE student set password='" . $newpass . "' WHERE name='" . $id . "'");
            $message = "Password Changed Sucessfully";
    
        } else {
            $message = "Password is not correct";
        }

    }
?>
