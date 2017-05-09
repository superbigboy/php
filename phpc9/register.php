<?php
header('Content-Type:text/html;charset=utf-8');
include 'db.inc.php';
if(isset($_POST['submit'])){//如果用户提交注册数据
    $username = $_POST['username'];
    $password = $_POST['pwd'];
    $rePassword = $_POST['repwd'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $introduction = $_POST['introduction'];
    $registerTime = time();

    //先验证用户名和密码是否为空
    if(strlen($username)==0 || strlen($password)==0){
        echo '用户名或者密码不能为空';
    }
    //判断密码和重复密码是否一致
    if($password != $rePassword){
        echo '密码和确认密码不一致';
    }

    //编写sql语句
    $sql = "INSERT INTO `users`(`username`, `password`, `email`,`phone`,`introduction`,`registerTime`) VALUES ('$username','$password','$email','$phone','$introduction','$registerTime')";
    echo $sql;
    //执行SQL语句
    $result=mysqli_query($conn, $sql);
    if($result){2
        echo '注册成功';
        $id = mysqli_insert_id($conn);
        header('location:detail.php?id='.$id);
    }else{
        echo '注册失败';
        echo mysqli_error($conn);
    }
}

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
    <p>&nbsp; 电话：<input type="text" name="phone" placeholder="请输入手机号" /></p>
    <p>&nbsp; 个人介绍：<textarea name="introduction"></textarea> </p>
    &nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submit" value="注册"/>
</form>
</body>
</html>