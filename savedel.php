<meta http-equiv="Context-Type" content="text/html;charset=utf-8">
<?php
    require_once 'conn.php';

    $ID = $_POST['ID'];
    echo $ID;
    mysqli_query($conn, "delete from stuinf where id='$ID'");
    echo "<script type='text/javascript'>alert('删除成功！');";
    header("location:index.php");
    ?>
