<?php
    // header('Content-Type: application/json');
    $db = mysqli_connect('localhost','root','','quanlyvitien');
        if(!$db){echo "ERROR Connect!";
        }else{
            $data = '';
            $query = mysqli_query($db,"SELECT sum(`t_chitien`.`sotienchi`) AS `SUM(sotienchi)` from `t_chitien` where month(`t_chitien`.`ngaychi`) = month(current_timestamp()) AND matk = '".$_SESSION['id']."' ");
            while($r = mysqli_fetch_array($query)){
                $data =  " 
                    '".$r['SUM(sotienchi)']."'
                ";
            }
            echo $data;
        }
?>