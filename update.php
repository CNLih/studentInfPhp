<?php require_once 'conn.php';?>
<html>
    <meta http-equiv="Context-Type" content="text/html;charset=utf-8" />
    <title>
        更新页面
    </title>
    <?php include_once 'style.php';?>
    <body>
        <h1>
            PHP学生信息查询系统
        </h1>
    
        <script language="javascript">
            function chkinput(form)
            {
                if(form.name.value=="")
                {
                    alert("请输入姓名")
                    form.name.select();
                    return(false);
                }
                if(form.age.value=="")
                {
                    alert("请输入年龄")
                    form.age.select();
                    return(false);
                }
                if(form.studentID.value=="")
                {
                    alert("请输入学号")
                    form.studentID.select();
                    return(false);
                }
                return(true);
            }
        </script>
            
        <form class="limitform" name="form1" method="post" action="saveupdate.php" onSubmit="return chkinput(this)">
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
                    <td><input name="name" type="text" id="name" value="<?php echo$info['name']?>" size="16"></td>
                    <td><input name="age" type="text" id="age" value="<?php echo$info['age']?>" size="16"></td>
                    <td><input name="studentID" type="text" id="studentID" value="<?php echo$info['studentID']?>" size="16"></td>
                </tr>
                <tr>
                    <td colspan="4" style="text-align: center"><input type="submit" name="button" id="button" value="更新" />
                        <input type="reset" name="button2" id="button2" value="重置" /></td>
                </tr>
            </table>
        </form>
    </body>
    <br>
    <a href="index.php"?>首页</a>
</html>
