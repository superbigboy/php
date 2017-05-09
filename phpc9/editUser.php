<?php
header('Content-Type:text/html;charset=utf-8');
include 'db.inc.php';
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $introduction = $_POST['introduction'];
    $id = $_POST['id'];

    $sql = "update users set username='$username',email='$email', phone='$phone', introduction='$introduction' where id=$id";
    echo $sql;
    if(mysqli_query($conn,$sql)){
        echo '用户信息修改成功';
        header('location:detail.php?id='.$id);
    }else{
        echo mysqli_error($conn);
    }
}
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "select * from users where id=$id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

}else{
    echo '请选择要编辑哪个用户的信息';
    header('location:index.php');
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
    <p>&nbsp;用户名：<input type="text" name="username" placeholder="请输入用户名" value="<?php echo $row['username'];?>"/></p>
    <p>&nbsp; email：<input type="text" name="email" placeholder="请输入邮箱地址" value="<?php echo $row['email'];?>"/></p>
    <p>&nbsp; 电话：<input type="text" name="phone" placeholder="请输入手机号" value="<?php echo $row['phone'];?>"/></p>
    <p>&nbsp; 个人介绍：<textarea name="introduction"><?php echo $row['introduction'];?></textarea> </p>
    <input type="hidden" name="id" value="<?php echo $row['id'];?>"/>
    &nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submit" value="修改"/>
</form>
</body>
</html>