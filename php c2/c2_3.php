<?php
//获取传进来的参数 行和列
	if(isset($_get['row'])){
		$row = $_get['get'];
	}
	else{
		$row = 10;
	}
	if(isset($_get['col'])){
		$col = $_get['get'];
	}
	else{
		$col = 9;
	}
	echo '<table border="1" width="400px">';
	for($i = 0 ; $i<$row; $i++){
		echo '<tr>';
			for($j=0; $j<$col; $j++){
				echo '<td height="100">';
				echo '</td>';
			}
		echo '</tr>';
	}
	echo '</table>';

?>