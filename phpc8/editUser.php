<?php

   //补全代码5-2 pdo方式更新数据，更新成功后，页面跳转至详情页
	header('Content-Type:text/html;charset=utf-8');
	include 'db.config.php';
	if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $introduction = $_POST['introduction'];
    $id = $_POST['id'];

    $sql = "update users set username='$username',email='$email', phone='$phone', introduction='$introduction' where id=$id";
    if($pdo->exec($sql)){
    	header('location:viewUser.php');
    }
?>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<title>修改用户信息</title>
<script type="text/javascript">
//表单验证部分暂时省略
</script>
<style>
*{
    font-size:36px;
}
</style>
</head>
<body>
<form action="editUser.php" method="post">
<table>
<caption>修改用户</caption>
<tr>
<td>用户名：</td>
<td><input type="text" name="username" value="" /></td>
</tr>

<tr>
<td>邮箱：</td>
<td><input type="text" name="email" value=""/></td>
</tr>
<tr>
    <td>电话：</td>
    <td><input type="text" name="phone" value=""/></td>
</tr>
<tr>
    <td>个人介绍：</td>
    <td><textarea name="introduction" cols="35" rows="8"></textarea></td>
</tr>
<tr><td colspan="2" style="text-align: center;">
<input type="submit" name="submit" value="修改" />&nbsp;
<input type="reset" name="reset" value="重置" />
<span style="font-size:9pt">已有帐号？<a href="./login.html">点此</a>登录</span>
</td></tr>
</table>
</form>
</body>
</html>