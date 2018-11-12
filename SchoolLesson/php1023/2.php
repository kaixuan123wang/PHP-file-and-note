<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		$fname = "./count.txt";
		$f = fopen($fname,"r");
		$cnt = fread($f, 1000);
		$cnt++;
		$f= fopen($fname, "w");
		fwrite($f,$cnt);
		fclose($f);
		echo $cnt;
	?>
</body>
</html>
