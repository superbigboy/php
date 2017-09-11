<?php 
	namespace Tmp;

	//若当前脚本没有定义命名空间，则表示使用的是跟命名空间
	require_once 'demo3.php';

	 //使用Exception类
	$e1 = new \Exception;
	var_dump($e1);

	//使用自定义Exception
	$e2 = new \App\Exception;
	var_dump($e2);
