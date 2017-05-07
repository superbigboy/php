<?php
/**
 * 字符串处理函数
 */
include('../code.php') ;
//处理用户名
//
$username2 = "  sswangzhong   yuss  ";
$username = trim($username2,'s');   //删除username开头和结尾的s
$username = rtrim($usernmae2,'s');   //删除username末尾的s


$usernameW = "王中禹";

echo strlen($username);
echo mb_strlen($usernameW,'utf-8');     //输出带有汉字的字符串长度

//检测密码
$psw = '1314';
$repwd = '1315';
if(strcmp($pwd,$repwd) == 0){     //strcmp判定两个字符串师是否相同，用于密码检测
	echo '密码一致';
}

//获取邮箱域名  @之后为域名，@之前为用户名

//字符串替换   str_replace($1,$2,$3)   $1找到需要替换的子串   $2替换的内容    $3替换的主串并返回
$str = "河北师范大学软件学院";
$search = "软件";
$replace = '<font color="red">'$search'</font>';
$newstr = str_replace($search, $replace, $str);
echo $newstr;

//字符串截取
substr($string, start//开始位置,length  截取长度，不写则截取到末尾)
//中文字符串截取
mb_substr(str, start)



