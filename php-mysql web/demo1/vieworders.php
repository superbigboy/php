<?php
	//create short variable name
	$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Bob's auto parts - customer orders</title>
</head>
<body>
	<h1>Bob's auto parts</h1>
	<h2>Customer orders</h2>
	<?php
		//rb是对文件打开方式进行限制：只读模式
		@$fp = fopen("orders.txt", 'rb');
		if(!$fp){
			echo "<p><strong>Bo orders pending. Please try again later.</p></strong>";
			exit;
		}
		//知道何时读取完成文件
		while(!feof($fp)){
			$order = fgets($fp,999);
			echo $order."<br/>";
		}
	?>
</body>
</html>
