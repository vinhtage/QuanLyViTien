<?php
    session_start();
    $id=$_GET['mavi'];
	// $mavi=$_POST['mavi'];
	$tenvi=$_POST['tenvi'];
    $loaivi=$_POST['loaivi'];
    $sodu=$_POST['sodu'];
    $ghichu=$_POST['ghichu'];
	$db = mysqli_connect('localhost','root','','quanlyvitien');
    if(!$db){echo "Lỗi Kết Nối";
    }else{
        $sql_update="UPDATE `t_vitien` SET `tenvi`='".$tenvi."',`maloaivi`='".$loaivi."',`sodu`='".$sodu."',`ghichu`='".$ghichu."' WHERE mavi = '".$id."' AND matk = '".$_SESSION["id"]."' ";
        mysqli_query($db,$sql_update);
        header("location:wallet.php");
        echo $sql_update;
    }
?>