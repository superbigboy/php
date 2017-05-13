<?php
header("Content-Type:text/html;charset=utf-8");
    $input[] = 'chapt5-4.php';
	$input[] = 'data.txt';
	$input[] = 'record.txt';
    $input[] = 'record.tst';
	echo "数组的结构是：<br />";
	print_r($input);
	echo "<hr />";

	echo "过滤后的数组：<br />";
	$pattern = '/\.txt$/';      //  \.的意思是转义字符.
	$filtered = preg_grep($pattern,$input);
	print_r($filtered);

/*
*/