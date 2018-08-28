<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		*{
			margin: 0;
			padding: 0;
		}
		div{
			position: relative;
			width: 300px;
			margin: 5px auto;
			padding-bottom: 10px;
			border: 1px solid #f9f;
		}
		h3{
			position: relative;
			width: 300px;
			height: 50px;
			background: #f9f;
			text-align: center;
			line-height: 50px;
		}
		li{
			list-style: none;
			border-bottom: 1px dashed #000;
			margin-left: 5px;
			margin-right: 5px;
			text-align: center;
		}
	</style>
</head>
<body>
	<div>
		<h3>热点新闻</h3>
		<ul>
			<?php
				$num = 12;
				for($i=1;$i<10000;$i++){

					echo "<li>$i$num</li>";
					if($i%10 == 0){
						echo '整十记录线';
						echo "<hr/>";
					}
				}
			?>
			
		</ul>
	</div>
</body>
</html>