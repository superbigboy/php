<?php
header('Content-Type:text/html;charset=utf-8');
include 'db.inc.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "select * from users where id=$id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

}else{
    echo '请设置查看哪个用户的详细信息';
    header('location:index.php');
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
<h1>用户详细信息</h1>
<p>用户名 ：<?php echo $row['username'];?></p>
<p>邮箱 ：<?php echo $row['email'];?></p>
<p>电话 ：<?php echo $row['phone'];?></p>
<p>个人介绍 ：<?php echo $row['introduction'];?></p>
<p>注册时间 ：<?php echo date('Y-m-d H:i:s',$row['registerTime']);?></p>
<p>最近登录时间 ：<?php
    if($row['lastLoginTime']){
    echo date('Y-m-d H:i:s',$row['lastLoginTime']);
    }else{
        echo '从未登录';
    }?></p>
<p>
    <a href="index.php"><input type="button" value="确认"/ ></a>
    <a href="edit.php"><input type="button" value="修改"/ ></a>
</p>
</body>
</html>