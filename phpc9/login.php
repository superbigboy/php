<?php
header('Content-Type:text/html;charset=utf-8');
include 'db.inc.php';
if(isset($_POST['submit'])){
$username = $_POST['username'];
$password = $_POST['pwd'];

//编写sql语句
$sql = "SELECT `username`, `password` FROM `users` WHERE `username`='$username' and `password`='$password'";

//执行sql语句
$result = mysqli_query($conn,$sql);
if(mysqli_affected_rows($conn)){
echo '登录成功'; //存session
}else{
echo '登录失败';
}


}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>用户登录</title>
    <style>
        *{
            margin:0;
            padding:0;
        }
        p{
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
<h1>&nbsp;&nbsp;用户登录</h1>
<form action="" method="post">
    <p>&nbsp;用户名：<input type="text" name="username" placeholder="请输入用户名" /></p>
    <p>&nbsp;&nbsp;密码：<input type="password" name="pwd" placeholder="请输入密码" /></p>
    &nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submit" value="登录"/>
</form>
</body>
</html>