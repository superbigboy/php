<?php
$str=<<<str
<html>
<head>
<title>网站页面</title>
</head>
<body>
<table>
<tr style="background-color:#33bb33;"><td>TERM</td><td>Rate</td></tr>
<tr><td>6months</td><td>0.24</td></tr>
<tr><td>1year</td><td>0.45</td></tr>
<tr><td>2year</td><td>0.36</td></tr>
<tr><td>3year</td><td>0.52</td></tr>
<tr><td>4year</td><td>0.25</td></tr>
<tr><td>5year</td><td>0.38</td></tr>
<tr><td>6year</td><td>0.43</td></tr>
</table>
<div id='variablerate'>0.42</div>
</body>
</html>
str;

$strReg='#</td><td>(.*)</td>#';
echo preg_match_all($strReg,$str,$arr);
echo "<br>";
print_r($arr);


?>