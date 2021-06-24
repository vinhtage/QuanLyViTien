<?php
    session_start();
    if(isset($_POST['submit'])){
        $file = $_FILES['file'];
        print_r($file);
        $fileName = $_FILES['file']['name'];
        $fileTmpname = $_FILES['file']['tmp_name'];
        $fileSize = $_FILES['file']['size'];
        $fileError = $_FILES['file']['error'];
        $fileType = $_FILES['file']['type'];

        $fileExt = explode('.',$fileName);
        $fileActualExt = strtolower(end($fileExt));

        $allowed = array('jpg','png','jpeg');

        if(in_array($fileActualExt, $allowed)){
            if($fileError === 0){
                if ($fileSize < 83886089){
                    $fileNameNew = uniqid('',true).".".$fileActualExt;
                    $fileFolder = 'images/user/'.$fileNameNew;
                    move_uploaded_file($fileTmpname, $fileFolder);
                } else {
                    echo "file qua nag";
                }
            }
        } else {
            echo "File ko dung";
        }
    }

    $database = mysqli_connect('localhost','root','','quanlyvitien');
    if(!$database){echo "Lỗi Kết Nối";
    }else{
        $sql_update="UPDATE t_taikhoan SET `anh` = '".$fileNameNew."' WHERE matk='".$_SESSION["id"]."'";
        mysqli_query($database,$sql_update);
        header("location:thongtincanhan.php");
    }
?>