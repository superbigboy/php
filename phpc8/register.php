<?php
include 'db.config.php';
//补全代码-4   pdo方式实现注册功能，注册成功，页面跳转至用户详情页面
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $rePassword = $_POST['repassword'];
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
    //echo $sql;
    $dsc = $dsc->query('select * from users ');
    $col = $dsc->fetchColumn();
    if($col){
        echo '注册成功';
        $id = mysqli_insert_id($conn);
        header('location:editUser.php?id='.$id);
    }else{
        echo '注册失败';
        echo mysqli_error($conn);
    }
}

?>

<html>
  <head>
      <meta http-equiv="content-type" content="text/html;charset=utf-8" />
      <title>新用户注册</title>
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
      <form action="register.php" method="post">
          <table>
              <caption>新用户注册</caption>
              <tr>
                  <td>用户名：</td>
                  <td><input type="text" name="username" /></td>
              </tr>
              <tr>
                  <td>密码：</td>
                  <td><input type="password" name="password" /></td>
              </tr>
              <tr>
                  <td>重复密码：</td>
                  <td><input type="password" name="repassword" /></td>
              </tr>
              <tr>
                  <td>邮箱：</td>
                  <td><input type="text" name="email" /></td>
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
                  <input type="submit" name="submit" value="注册" />&nbsp;
                  <input type="reset" name="reset" value="重置" />
                  <span style="font-size:9pt">已有帐号？<a href="./login.html">点此</a>登录</span>
              </td></tr>
          </table>
      </form>
  </body>
</html>