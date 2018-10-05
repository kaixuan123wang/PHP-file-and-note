<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		for($i=0;$i<100;$i++){
			for($s=0;$s<$i;$s++){
				echo $i*$s."<br>";
			}
		}
	?>
</body>
</html>