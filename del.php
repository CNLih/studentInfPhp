<?php require_once 'conn.php'; ?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
        <title>
            删除页面
        </title>
    </head>
    <?php include_once 'style.php';?>
    <body>
        <h1>
            PHP学生信息查询系统
        </h1>
                <form class="limitform" name="form1" method="post" action="savedel.php">
            <table style="width: 600px" border="1">
                <tr>
                    <td width="100">序号</td>
                    <td width="100">姓名</td>
                    <td width="100">年龄</td>
                    <td width="200">学号</td>
                </tr>
                <?php
                $ID = $_GET['ID'];
                $sql= mysqli_query($conn, "select * from stuinf where ID='".$ID."'");
                $info= mysqli_fetch_array($sql);
                ?>
                <tr>
                <input name="ID" type="hidden" id="ID" value="<?php echo $info['id']?>">
                    <td><?php echo$info['id'];?></td>
                    <td><?php echo$info['name'];?></td>
                    <td><?php echo$info['age'];?></td>
                    <td><?php echo$info['studentID'];?></td>
                </tr>
                <tr>
                    <td colspan="4" style="text-align: center">
                        <input type="submit" name="button" id="button" value="删除" /></td>
                </tr>
            </table>
        </form>
    </body>
    <br>
    <a href="index.php"?>首页</a>
</html>