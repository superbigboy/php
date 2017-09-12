<?php
//require_once 'Date.php';
//编码规范中一个php文件中只能包含一个类
/************************************
function __autoload($className)
{
	//当调用不存在的类的时候自动调入该类
	require_once $className.'.php';
}
*************************************/


//使用spl自动加载机制
header('Content-Type:text/html;charset=utf-8');
spl_autoload_register(function($className)
{
	echo $className.'类被自动加载<br/>';
	require_once $className. '.php';
});

class Person
{
	private $name;
	//private $age;
	private $birthday;
	public function __cponstruct($name,Date $birthday)//允许对数组、对象类型提示，方便阅读
	{
		$this->name = $name;
		$this->birthday = $birthday;
	}
}
