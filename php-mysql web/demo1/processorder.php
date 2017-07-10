<!DOCTYPE html>
<html>
<head>
	<title>Bob's Auto Parts - Order Results</title>
</head>
<body>
	<h1>Bob's Auto Parts - Order Results</h1>
	<h2>Order Results</h2>
	<?php 
		header('Content-Type:text/html;charset=utf-8');
		date_default_timezone_set('UTC');
		echo '<p>Order Processed at '.date('Y年M月d日 H：i : s')."</p>"; 
		
		//create short variable names
		$tireqty = $_POST['tireqty'];
		$oilqty = $_POST['oilqty'];
		$sparkqty = $_POST['sparkqty'];

		echo '<p> Your order is as follows:</p>';
		echo $tireqty. 'tires<br/>'; 
		echo $oilqty. 'bottles of oil<br/>';
		echo $sparkqty. 'spark plugs<br/>';

		$totalqty = 0;
		$totalamount = 0.00;
		echo "<br/>";

		//常量的定义
		define ('TIREPRICE', 100);
		define ('OILPRICE', 10);
		define ('SPARKPRICE',4);
		//输出常量值不使用$符号，直接写常量名即可
		echo OILPRICE;
	?>
</body>
</html>
