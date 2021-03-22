<?php require_once 'conn.php';?>
<html>
    <head>
    <?php
    include 'style.php';
    ?>
        <meta http-equiv="Context-Type" content="text/html; charset=utf-8" />
        <title>
            PHP学生查询系统
        </title>
    </head>
    <h1>
        PHP学生信息查询系统
    </h1>
    
    <table>
        <th>
        <tr>
            <td>序号</td>
            <td>学号</td>
            <td>姓名</td>
            <td>年龄</td>
            <td>操作<td>
        </tr>
        </th>
        <?php
        $ID = @$_GET['ID'];
        $sql = mysqli_query($conn, "select * from stuinf where id='".$ID."'");
        $info = mysqli_fetch_array($sql);
        ?>
        <tr>
        <td><?php echo$info['id']; ?></td>
        <td><?php echo$info['name']; ?></td>
        <td><?php echo$info['age']; ?></td>
        <td><?php echo$info['studentID']; ?></td>
        <td><a href="update.php?ID=<?php echo $info['id']?>">更新</a>
            <a href="del.php?ID=<?php echo $info['id']?>">删除</a></td>
        </tr>
    </table>
    <br>
    <a href="index.php"?>首页</a>
</html>
