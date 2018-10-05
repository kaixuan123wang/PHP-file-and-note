<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		$a = 10;
		$b = 22;
		$c = 3;
		if($a>$b){
			if($a>$c){
				echo $a;
			}else{
				echo $c;
			}
		}else if($b>$c){
			echo $b;
		}else{
			echo $c;
		}
	?>
</body>
</html>