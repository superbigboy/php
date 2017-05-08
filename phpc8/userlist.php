<?php
//补全代码-2  pdo方式获取所有用户信息，显示用户列表
include_once 'db.config.php';
$staPdo = $dsc->query('select * from users ');
$users = $staPdo->fetchAll();
echo '<table border="1" width="800px">';
echo '<tr><th>编号</th><th>用户</th><th>操作</th></tr>';
//将users数组遍历到表格中
foreach ($users as $user) {
	# code...
	$id=$user['id'];
	echo '<tr>';
		echo '<td>'.$user['id'].'</td>';
		echo '<td>'.$user['username'].'</td>';

		echo '<td>';
			echo '<a href="editUser.php?id=$id">修改</a>';
			echo '<a href="userDelete.php?id=$id">删除</a>';
			echo '<a href="viewUser.php?id=$id">查看</a>';
		echo '</td>';


	echo '</tr>';
}
echo '</table>';
?>





