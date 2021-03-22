<!DOCTYPE html>
<html>
    <head>
    <?php
        include 'style.php';
    ?>
        <title>
            PHP学生信息查询系统   
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
    require 'conn.php';

    $sql1 = mysqli_query($conn, "select * from stuinf order by id");
    while($info1 = mysqli_fetch_array($sql1))
    {
    ?>
        <tr>
        <td>
            <?php echo$info1['id'];?>
        </td>
        <td>
            <?php echo$info1['studentID'];?>
        </td>
        <td>
            <?php echo$info1['name'];?>
        </td>
        <td>
            <?php echo$info1['age'];?>
        </td>
        <td>
            <a href="detail.php?ID=<?php echo $info1['id'];?>">详细</a>
        </td>
        </tr>

    <?php
    }
    ?>


    </table>
    <br>
    <a href="add.php"?>添加</a>

</html>