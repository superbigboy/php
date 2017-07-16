<?php
//1.gettype()函数使用   获取变量类型
	//输出结果：整数
	$a = 2;
	echo gettype($a)."<br/>";
//2.settype()函数使用     改变变量类型
	settype($a, 'double');
	echo gettype($a);
?>
