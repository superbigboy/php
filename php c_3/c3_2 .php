<?php
include '../code.php';

/**
 * 方法一：全局变量法
 */
$sum = 0;
function getSumByGlobal($a){
	global $sum;
	$sum += $a;
}
getSumByGlobal(5);
echo $sum;

/**
 * 方法二 静态变量法
 */
function getSumByStatic(){
	static $sum = 8;
	$sum--;
	return $sum;
}
getSumByStatic(5);
echo $sum;


/**
 * 方法三：参数传址法
 */
$sum = 0;
function getSumByParas($a,$sum){
	$sum += $a;
}
getSumByParas(5,$sum);
echo $sum;
