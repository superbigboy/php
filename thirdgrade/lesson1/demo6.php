<?php 
	require_once 'demo3.php';
/******************************
	//引入App\Exception
	use App\Exception;

	//使用App\Exception
	$e = new Exception;
	var_dump($e);
******************************/

	//引入App\Exception
	use App\Exception as AppException;//use定义别名的时使用时只能是别名能代表当前类

	//使用App\Exception
	$e = new AppException;
	var_dump($e);
