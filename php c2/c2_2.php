<?php
//随机数实验
	$num = rand(1,100);
	var_dump($num);
	if($num == 1 || $num == 100)
		echo '恭喜你中了并没有什么用的特等奖';
	elseif (2<$num || $num<10 || 91<$num || $num<99) {
		echo '恭喜你中了其实也没什么用的一等奖';
	}	
	else
		echo '恭喜你，这才是抽奖的意义所在';

?>