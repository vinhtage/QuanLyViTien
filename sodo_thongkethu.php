<?php
    // header('Content-Type: application/json');
    $db = mysqli_connect('localhost','root','','quanlyvitien');
        if(!$db){echo "ERROR Connect!";
        }else{
            $data = '';
            $query = mysqli_query($db,"SELECT sum(`t_thutien`.`sotienthu`) AS `SUM(sotienthu)` from `t_thutien` where month(`t_thutien`.`ngaythu`) = month(current_timestamp()) AND matk = '".$_SESSION['id']."' ");
            while($r = mysqli_fetch_array($query)){
                $data =  " 
                    '".$r['SUM(sotienthu)']."'
                ";
            }
            echo $data;
        }
?>