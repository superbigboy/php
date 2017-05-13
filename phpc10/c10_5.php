<?php
header('Content-type:text/html;charset=utf-8');
$str=<<<STR
<html>
<head>
<title>网站页面</title>
</head>
<body>
<div>奥运会中国最新金牌数为：</div>
<div id="id1">30</div>
</body>
</html>
STR;
//var_dump($str);
//先清除空白符
$newstr=preg_replace('/\s/', 'zzz', $str);
var_dump($newstr);

//编写规则
$pattern='/\<html.*id="id1"\>(\d+).*(html\>)$/';
$pattern='/\<html.*id="id1"\>(\d+).*(html\>)$/';

//替换
var_dump(preg_replace($pattern, "$1", $newstr));




/*
	*正则表达式基本语法：使用引号引起来；	
	*[]表示选择括号中的一个


*/
?>
