<?php
$DB = mysqli_connect('localhost', 'root', '', 'quanlyvitien');
if (!$DB)
{
    echo "Lỗi Kết Nối";
}
else
{
    $kq = mysqli_query($DB, "SELECT sum(`t_thutien`.`sotienthu`) AS `SUM(sotienthu)` from `t_thutien` where month(`t_thutien`.`ngaythu`) = month(current_timestamp()) AND matk = '".$_SESSION['id']."' ");
    if (mysqli_num_rows($kq) > 0)
    {
        while ($r = mysqli_fetch_array($kq))
        {
            $wdthu = number_format($r['SUM(sotienthu)']);
            echo "<td>" . $wdthu . "</td>";
        }
    }
}
?>