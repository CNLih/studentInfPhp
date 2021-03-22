# PHP+Mysql+Html

入门学习 - 学生信息记录  （个人笔记）



### 配置服务器环境

[小皮面板(phpstudy)](https://www.xp.cn/)作为配置服务器环境的工具。


只需要打开apache与mysql即可，apache作为Web服务器，它**侦听一个TCP端口，一般是80，对端口收到的命令进行解释，然后提交一些结果。**



**编辑环境**Apache NetBeans IDE 12.0



### 程序

##### 预备部分：

mysql连接：conn.php

```php
$conn = mysqli_connect("localhost", "root", "root", "student");  //服务器地址、名、密码、数据库
```

##### 主页：

如果访问当前文件路径，服务器或默认打开带有index字样的php或html

显示记录部分：

利用php的echo与循环，让网页输出列表：index.php

通过<u>详细</u>超链接，并利用 `？ID=<?php echo $info1['id'];?>`来实现定位

##### 详细：

`$_GET[]`获取主页传来的id信息

同样用`<a href="">`超链接引出更新与删除

##### 更新：

##### 利用form表单post方法，并通过js方法检测输入合理

`<form class="limitform" name="form1" method="post" action="saveupdate.php" onSubmit="return chkinput(this)">`

值得注意的是：

`<input name="ID" type="hidden" id="ID" value="<?php echo $info['id']?>">`

这样也是传递了一个消息，并且因为type是hidden，所以页面中隐藏

解释`action="saveupdate.php"`

传递信息给的是saveupdate.php，提交表单后，启动这个php文件执行。（用sql语句保存更改即可）



### 页面

页面采用统一的表格格式，放在了style.php中（应该放在css中？），之后include这个php就可以继承这个风格了



To be continue...





参考书：**PHP+MySQL+Dreamweaver动态网站开发从入门到精通 第3版**

http://e.dangdang.com/products/1901153718.html

