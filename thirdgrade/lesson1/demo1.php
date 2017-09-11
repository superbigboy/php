<?php  
	/**********闭包函数*********
	$fn = function($name){

	};
	var_dump($fn);
	***************************/

	//闭包函数用作函数回调
	$arr = [1,2,3];
	array_walk($arr,function($val,$key){
		echo $key.'=>'.$val.'<br/>';
	});
		

