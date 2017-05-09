<?php
header('Content-Type:text/html;charset=utf-8');
include 'db.inc.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "delete  from users where id=$id";
    if(mysqli_query($conn,$sql)){
        header('location:index.php');
    }else{
        echo mysqli_error($conn);
    }

}else{
    echo '请设置删除哪个用户的信息';
    header('location:index.php');
}