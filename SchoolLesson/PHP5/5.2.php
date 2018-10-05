<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	$arr = array(
			"stu"=>array(
				"wp"=>array("王平",168,16),
				"lg"=>array("李刚",170,18)),
			"teacher"=>array(
				"syj"=>array("隋颖佳",180,25),
				"lzp"=>array("刘志鹏",175,30)),
			"other"=>array(
				"bj"=>array("保洁阿姨",165,35),
				"cw"=>array("财务",175,35))
			);
	foreach($arr as $key=>$va1){
		echo "分类：".$key."<br>";
		foreach($va1 as $key1=>$va2){
			echo "成员花名：".$key1."<br>";
			foreach($va2 as $va3){
				echo "成员信息：".$va3."<br>";
			}
		}
	}
	var_dump($arr);
?>
</body>
</html>
