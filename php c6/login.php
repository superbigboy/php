<?php
header('Content-Type:text/html;charset=utf-8');
/**
 * login.php：一个登录表单（提交给当前页面），提示用户输入用户名和密码，用户信息合法后，跳转到index.php页面
 */

if(isset($_POST['username'])){
	//设置cookie，页面跳转
	//setcookie('username',$_POST['username'],time()+3600);
	session_start();    //开启会话
	$_SWSSION['username'] = $_POST['username'];//设置session

	//header('Location:index.php');
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>用户注册</title>
</head>
<body>
<form action="" method="post">
    <p>用户名：<input type="text" name="username" /></p>
    <p>&nbsp;密码：<input type="password" name="pwd" /></p>
    <p>&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submit" /></p>
    <input type="hidden" name="id" value="200">
</form>

</body>
</html>
