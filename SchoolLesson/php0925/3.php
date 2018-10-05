<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
		$str = "123|456|789";
		$arr = explode("|",$str);
		print_r($arr);
		echo "<br>";
		$str1 = implode("~",$arr);
		echo $str1;
	 ?>
</body>
</html>