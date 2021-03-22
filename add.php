<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
        <title>
            添加记录
        </title>
    </head>
    <?php include "style.php"?>
    
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
    
    <body>
        <p  style="text-align: center;font-size: 40px;font-family: KaiTi;">PHP学生信息系统</p>
        <form class="limitform" name="form1" method="POST" action="saveadd.php" onSubmit="return chkinput(this)">
            <table border="1" style="width: 400px">
                <tr>
                    <td width="84">姓名：</td>
                    <td width="203"><input type="text" name="name" id="name"></td>
                </tr>
                <tr>
                    <td>年龄：</td>
                    <td><input type="text" name="age" id="age"></td>
                </tr>
                <tr>
                    <td>学号：</td>
                    <td><input type="text" name="studentID" id="studentID"></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><input type="submit" name="button" id="button" value="提交" />
                        <input type="reset" name="button2" id="button2" value="重置" /></td>
                </tr>
            </table>
        </form>
    </body>
    <br>
    <a href="index.php"?>首页</a>
</html>

