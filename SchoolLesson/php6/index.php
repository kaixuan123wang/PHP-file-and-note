<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		$a = range('a','z');
		$b = range(0,25);
		print_r($a);
		echo "<br>";
		print_r($b);
		echo "<hr>";
		$a = array(1,2,3,4,5,6);
		$b = array('a','b','c','d','e','f');
		$c = array_combine($a,$b);
		print_r($c);
		echo "<hr>";
		$a = array_fill(3,10,"abc");
		print_r($a);
		echo "<br>";
		$c = array(1,2,3);
		$c = array_pad($c,-5,"efg");
		print_r($c);
		$f = array(1,2);
		$f = array(1,2);
		echo "<hr>";
		$a = "1-2-3-4-5-6-7-8-9";
		$a_arr = explode('-',$a);
		print_r($a_arr);
		echo "<br>";
		$b = array(1,2,3,4,5,6,7,8,9,0);
		$b_str = implode('----',$b);
		echo $b_str;
	?>
</body>
</html>