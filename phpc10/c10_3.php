<?php
header("Content-Type:text/html;charset=utf-8");
/*在数字表达式中取操作数*/
$expression = '3+5*8-12';
$pattern = '/[+*-\/]/';
$operand = preg_split($pattern,$expression);
print_r($operand);

/*
  *拆分规则是pattern；拆分目标是expression
*/