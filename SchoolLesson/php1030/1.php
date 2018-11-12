<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		$f = "./wang.txt";
		$filt = fopen($f, "a");
		for($i=0;$i<9999;$i++){
			$r = "123456";
			fwrite($filt,$r);
		}
?>
<script>
	function a(){
		location.reload();
	}
	setTimeout(a(),10);
</script>
</body>
</html>
