<?php
header('Content-Type:text/html;charset=utf-8');
include 'db.inc.php';
$sql = "select * from users";
$result = mysqli_query($conn, $sql);
echo '<table border="1">';
echo '<tr><th>编号</th><th>用户名</th><th>邮箱</th><th>电话</th><th>最后登陆时间</th><th>操作</th></tr>';
while($row = mysqli_fetch_assoc($result)){
    $id = $row['id'];
    echo '<tr>';
    echo '<td>'.$row['id'].'</td>';
    echo "<td><a href='editUser.php?id=$id'>".$row['username']."</a></td>";
    echo '<td>'.$row['email'].'</td>';
    echo '<td>'.$row['phone'].'</td>';
    
    if($row['lastLoginTime']){
        $lastLoginTime = date('Y-m-d H:i:s',$row['lastLoginTime']);
    }else{
        $lastLoginTime='从未登录';
    }
    echo '<td>'.$lastLoginTime.'</td>';
    echo "<td><a href='editUser.php?id=$id'>修改</a>&nbsp;<a href='detail.php?id=$id'>查看</a>&nbsp;<a href='delete.php?id=$id'>删除</a></td>";
    echo '</tr>';
}
echo '</table>';