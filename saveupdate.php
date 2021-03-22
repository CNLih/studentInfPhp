<meta http-equiv="Context-Type" content="text/html;charset=utf-8">
<?php
require_once 'conn.php';

$ID = $_POST['ID'];
$name = $_POST['name'];
$age = $_POST['age'];
$stuid = $_POST['studentID'];

mysqli_query($conn, "update stuinf set name='$name', age='$age', studentID='$stuid' where id='$ID';");
echo "<script type='text/javascript'>alert('修改成功！');history.back()</script>;";

?>
