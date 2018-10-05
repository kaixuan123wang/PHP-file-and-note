<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		date_default_timezone_set("prc");
		$weekday = date("w");
		$dat = date('Y-m-d H-i-s');
		switch($weekday){
			case '1':
				echo "今天是 $dat 星期一,新的一天开始了！";
				break;
			case '2':
				echo "今天是 $dat 星期二,时刻保持工作状态！";
				break;
			case '3':
				echo "今天是 $dat 星期三,劳动者是最美的人，努力工作哦！";
				break;
			case '4':
				echo "今天是 $dat 星期四,勤奋才能创造绩效，加油！";
				break;
			case '5':
				echo "今天是 $dat 星期五,一定要出色地完成本周工作哦！";
				break;
			default:
				echo "礼拜天,礼拜天  $dat ";
				break;
		}

	?>
</body>
</html>