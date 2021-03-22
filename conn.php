<?php
$conn = mysqli_connect("localhost", "root", "root", "student");
mysqli_set_charset($conn, "utf8");
mysqli_query($conn, "utf8");
if(mysqli_connect_error($conn))
{
    echo "连接MySQL失败：".mysqli_connect_errno();
}
?>