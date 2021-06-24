<?php
$DB = mysqli_connect('localhost', 'root', '', 'quanlyvitien');
if (!$DB)
{
    echo "ERROR CONNECT!";
}
else
{
    $kq = mysqli_query($DB, "SELECT sum(`t_vitien`.`sodu`) AS `SUM(sodu)` from `t_vitien` where matk = '".$_SESSION['id']."' ");
    if (mysqli_num_rows($kq) > 0)
    {
        while ($r = mysqli_fetch_array($kq))
        {
            $wdsum = number_format($r['SUM(sodu)']);
            echo "<td>" . $wdsum . "</td>";
        }
    }
}
?>