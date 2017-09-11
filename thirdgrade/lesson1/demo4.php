<?php 
	namespace App\Models;    //App命名空间下的子命名空间

	//$e = new Exception;   //程序会报错：找不到此类	
	$e = new \Exception;  //内之类在根命名空间下，用斜杠
	var_dump($e);
	class Person{
		//Person类的完整类名字是 App\Models\Person
	}
	/**************
	$p = new Person;
	var_dump($p);
	**************/
