<?php
$DB = mysqli_connect('localhost', 'root', '', 'quanlyvitien');
if (!$DB)
{
    echo "Lỗi Kết Nối";
}
else
{
    $kq = mysqli_query($DB, "SELECT sum(`t_chitien`.`sotienchi`) AS `SUM(sotienchi)` from `t_chitien` where month(`t_chitien`.`ngaychi`) = month(current_timestamp()) AND matk = '".$_SESSION['id']."' ");
    if (mysqli_num_rows($kq) > 0)
    {
        while ($r = mysqli_fetch_array($kq))
        {   
            $wdchi = number_format($r['SUM(sotienchi)']);
            echo "<td>" . $wdchi . "</td>";
        }
    }
}
?>

<!-- $_SESSION['id'] -->
<!-- if($_SESSION['id'] == $r['matk']){} -->