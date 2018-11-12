<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		$fname = "./点击进入.txt";
		$f = fopen($fname, "a+");
		for($i=0;$i<=100;$i++){
			fwrite($f,$i."\n");
		};
	?>
</body>
</html>


