

<?php
$DB = mysqli_connect('localhost', 'root', '', 'quanlyvitien');
if (!$DB)
{
    echo "Lỗi Kết Nối";
}
else
{
    $kq = mysqli_query($DB, "SELECT COUNT(`t_vitien`.`mavi`) AS ` COUNT(mavi)` from t_vitien where matk = '".$_SESSION['id']."' ");
    if (mysqli_num_rows($kq) > 0)
    {
        while ($r = mysqli_fetch_array($kq))
        {
            echo "<td>" . $r['COUNT(mavi)'] . "</td>";
        }
    }
}
?>
