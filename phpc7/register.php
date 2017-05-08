<?php
    header('Content-Type:text/html;charset=utf-8');
    if(isset($_POST['submit'])){
        //用户提交了数据
        //检测合法性，如果合法插入到数据库中
        $username = $_POST['username'];
        $password = $_POST['pwd'];
        $rePassword = $_POST['repwd'];
        $email = $_POST['email'];
        //验证用户名和密码是否为空,验证字符串是否为空
        if(strlen($username) == 0 || strlen($password) == 0){
            echo '用户名或是密码不能为空;';
        }
        //判断密码是否正确
        if($password != $rePassword){
            echo '两次密码不一致';
        }

        //数据库的使用
        //连接数据库
        $conn = mysqli_connect('localhost','root','root','bbs');
        //编写sql语句
        $sql = "INSERT INTO 'users'('username','password','email') VALUES ($username,$password,$email) ";
        //执行sql语句
        $result = mysqli_query($conn,$sql);
        if($result){
            echo '注册成功';
        }else{
            echo '注册失败';
            echo mysqli_error($conn);
        }
    }

?>

<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>用户注册页</title>
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
    <h1>&nbsp;&nbsp;用户注册</h1>
    <form action="" method="post">
        <p>&nbsp;用户名：<input type="text" name="username" placeholder="请输入用户名" /></p>
        <p>&nbsp;&nbsp;密码：<input type="password" name="pwd" placeholder="请输入密码" /></p>
        <p>确认密码：<input type="password" name="repwd" placeholder="请再次输入密码" /></p>
        <p>&nbsp; email：<input type="text" name="email" placeholder="请输入邮箱地址" /></p>
        &nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submit" value="注册"/>
    </form>
</body>
</html>