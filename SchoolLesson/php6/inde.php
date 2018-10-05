<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		$a = array(1,2,3,4,5,6,6,2,1,3);
		$num = count($a);
		$a_min = min($a);
		$a_max = max($a);
		$sum = array_sum($a);
		$r = array_count_values($a);
		echo "有".$num."个元素,最小值为".$a_min."最大值为".$a_max."总和为".$num."重复情况为";
		print_r($r);
		echo "<hr>";
		$arr = array("a"=>"10","b"=>"20","c"=>"30");
		next($arr);
		echo key($arr);
		end($arr);
		echo key($arr);
		prev($arr);
		echo key($arr);
		reset($arr);
		echo key($arr);
		echo "<hr>";
		$a = array("a"=>"1","b"=>"2","c"=>"3");
		extract($a);
		echo "$a $b $c";
		$a = "a";
		$b = "b";
		$c = "c";
		$ss = compact($a,$b,$c);
		print_r($ss);

	?>
</body>
</html>