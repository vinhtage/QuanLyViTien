<?php
$database = mysqli_connect('localhost', 'root', '', 'quanlyvitien');
if (!$database)
{
    echo "Lỗi Kết Nối";
}
else
{
    $loaivi = mysqli_query($database, "SELECT * FROM `t_loaivi`");
    if (mysqli_num_rows($loaivi) > 0)
    {
        while ($r = mysqli_fetch_array($loaivi))
        {
            echo "<option value='" . $r['maloaivi'] . "'>" . $r['tenloaivi'] . "</option>";
        }
    }
}
?>
