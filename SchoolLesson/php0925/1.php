<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	header('charset:utf-8;');
	$str = "abcdefacbdea<br>";
	echo addcslashes($str,"ac");
	echo stripcslashes(addcslashes($str, "ac"));
	echo substr($str, 0,2)."<br>";
	echo substr($str,-2,)
	echo mb_substr($str, 1,2,"utf-8");
?>
</body>
</html>
