<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		$up = $_POST["up"];
		$up_arr = explode('.',$up);
		$i = max($up_arr);
		$x = min($up_arr);
		for($y=0;$y<3;$y++){
			$v = $up_arr[$y];
			if($v == $i || $y == $x){
				
			}else if($x + $v > $i){
				echo "三角形";
			}else{
				echo "不是三角形";
			}
		}
		
	?>
</body>
</html>