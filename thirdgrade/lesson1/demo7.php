<?php 
	//has-a关系在php中的实现
	//PSR编码规范----------课下了解
	namespace App;

	//定义一个人的类
	class Person
	{
		public $name ='';
		public $birthday;

		public function __clone()
		{
			$this->birthday = clone $this->birthday;
		}
	}
	//定义日期类
	class Date
	{
		public $year;
		public $month;
		public $day;
	}
	//创建Person对象和Date对象
	$b = new Date;
	$b->year = 1996;
	$b->month = 06;
	$b->day = 24;

	$p = new Person;
	$p->name = 'aliu';
	$p->birthday = 'new Date';

	//修改b
	$b->year = 1997;
	//输出p
	echo $p->birthday->year;

	//引用传递
    $q =$p;
    $p->birthday->year = 1990;
    echo $q->birthday->year;
