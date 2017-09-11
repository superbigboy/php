<?php 
/********************************************** 
	//闭包封闭、保存了定义函数时的作用域
	$name = 'test';
	$fn = function(){//php中不可以直接访问全局变量
		echo $GLOBALS['name'];
	};//输出结果为name

	//修改name值
	$name = 'tmp';//输出结果是tmp
	//调用函数
	$fn();
**********************************************/

	//闭包封闭、保存了定义函数时的作用域
	$name = 'test';
	$fn = function() use($name){//php中不可以直接访问全局变量
		//echo $GLOBALS['name'];
		echo $name;
	};

	//修改name值
	$name = 'tmp';
	//调用函数
	$fn();


//延迟加载可以节省时间、空间

