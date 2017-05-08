<?php
//补全代码-3 从数据库获取id为$id的数据
include_once 'db.config.php';
if(isset($_GET['id'])){
	$id = $_GET['id'];
	$sql = "select * from users where id=$id";
	$staPdo = $dsc->query($sql);
	//取到数据
	$user = $staPdo->fetch();
}else{
	echo '请指定查询数据的id';
	header('localhost:userList.php');
}
?>
<p>
	邮箱:
	<?php 
		echo $user['email'];
	?>
</p>
<p>
	用户名:
	<?php
		echo $user['username'];
	?>
</p>
<p>
	电话:
	<?php 
		echo $user['phone'];
	?>
</p>
<p>
	个人介绍:
	<?php 
		echo $user['introduction'];
	?>
</p>
<p>
	注册时间:
	<?php 
		echo data('Y-m-d H:i:s',$user['registerTime']);
	?>
</p>
<a href="userList.php">返回用户列表页</a>