<?php
header("Content-Type:text/html;charset=utf-8");
/**
 * 功能：检测传入参数是否为合法qq号
 * @param $qq，传入的qq号
 */
/*
 ·正则表达式是一个字符串；
 ·主要用于查找替换校验等；
 ·按一定规则书用来描述模式的特殊字符，广泛应用在js和php中；
 ·书写格式：$a = '/ddd/'；
 ·不是php特有
 ·正则表达式的两种类型：Perl兼容的正则表达式；
 					  posix风格的正则表达式（主要用于unix系统中）；
*/
function qq($qq){
    /*QQ号码必须是5-11位数字组成，首位不能是0 */ 
	$pattern = '/^[1-9][0-9]{4,10}$/';  
	//^后面接的括号里面表示QQ号的第一位数字范围，第二个括号表示第二位的范围，第三个表达式是剩余位数的范围
    if(preg_match($pattern,$qq)){  //判断$qq$pattern是否符合的规则
        echo $qq.'是合法的qq号码';
    }else{
        echo $qq.'非合法qq号码';
    }
}
qq('363787211');

