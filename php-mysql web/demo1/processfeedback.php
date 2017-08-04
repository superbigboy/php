<?php 
	$name = $_POST['name'];
	$email = $_POST['email'];
	$feedback = $_POST['feedback'];

	$toaddress = "feedback@example.com";
	$subject = "Feedback from web site";

	$mailcontent = "Customer name:".$name."\n".
					"Customer email:".$email."\n".
					"Customer comments:\n".$feedback."\n";
	//mail函数原型
	//mail(to, subject, message)
	//第二个参数是主题行，第三个参数是消息内容，可以有第四个参数为额外的有效的表头
	mail($toaddress,$subject,$mailcontent,$fromaddress);
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Bob's Auto Parts - Feedback Submitted</title>
 </head>
 <body>
 	<h1>Feedback submitted</h1>
 	<p>Your feedback had been sent.</p>
 </body>
 </html>
