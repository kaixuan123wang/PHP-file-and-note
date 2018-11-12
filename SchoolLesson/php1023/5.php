<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		img{
			height: 20px;
		}
	</style>
</head>
<body>
	<?php
	$sum=0;
	$fname = "./void.txt";
	$f = fopen($fname,"r");
	$s = fread($f, 100);
	$arr = explode("|",$s);
	foreach ($arr as $value) {
		$sum += $value;
	}
	?>
	<p>乔丹[<?php echo $arr[0];?>]<span width="<?php echo ($arr[0]/$sum*100);?>"></span>
		<p>安东尼[<?php echo $arr[1];?>]<img src="1.gif" width="<?php echo ($arr[1]/$sum*100);?>"></p>
		<p>科比[<?php echo $arr[2];?>]<img src="1.gif" width="<?php echo ($arr[2]/$sum*100);?>"></p>
		<p>欧文[<?php echo $arr[3];?>]<img src="1.gif" width="<?php echo ($arr[3]/$sum*100);?>"></p>
		<p>库里[<?php echo $arr[4];?>]<img src="1.gif" width="<?php echo ($arr[4]/$sum*100);?>"></p>
</body>
</html>
