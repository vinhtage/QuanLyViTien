<?php 
    $database = mysqli_connect('localhost','root','','quanlyvitien');
    if(!$database){echo "Error!!";}
    else{
        $mavi = $_REQUEST['mavi'];
        mysqli_query($database,"DELETE FROM `t_vitien` WHERE `mavi`='$mavi'");
        header('location:wallet.php');
    }
?>
