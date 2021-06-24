<?php
    $connect = mysqli_connect('localhost','root','','quanlyvitien');
    if(!$connect){echo "Error!!";   
    }else{
        $query = "SELECT * FROM t_taikhoan WHERE matk = '".$_SESSION["id"]."' ";
        $result = mysqli_query($connect,$query);
        $row = mysqli_fetch_array($result);
?>

<img class="user-avatar rounded-circle" src="images/user/<?php echo $row['anh']?>" alt="User Avatar" />

<?php
    }
?>