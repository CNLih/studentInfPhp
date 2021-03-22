<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<?php
    require_once 'conn.php';
    $name = $_POST['name'];
    $age = $_POST['age'];
    $stuid = $_POST['studentID'];
    
    mysqli_query($conn, "insert into stuinf(name, age, studentID) values('$name', '$age', '$stuid');");
    echo "<script language='javascript'>alert('添加成功！');history.back();</script>";

    ?>
