
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>123</title>
	<style>
	div{
		position: relative;
		width: 960px;
		height: 50px;
		margin: 0 auto;
	}
		li{
			position: relative;
			width: 100px;
			height: 50px;
			float: left;
			margin-left: 5px;
			background: #ff0;
			border: 1px solid #f00;
			text-align: center;
			line-height: 50px;
			list-style: none;
		}
		ul{
			position: relative;
			margin: 0 auto;
		}
		span{
			clear: both;
		}
	</style>
</head>
<body>
	<div><ul>
		<li>x</li>
		<li>xx</li>
		<li>xxx</li>
		<li>xxxx</li>
		<li>xxxxx</li>
		<li>xxxxxx</li>
	</ul></div>
	<br/>
	<div>
	<?php
	for($i=01;$i<100;$i++){
		if($i%10== 0){
			?>
			<br/>
			<?php
				}
			?>
		<span><?php echo $i?></span>
	<?php
	}
	?></div>
</body>
</html>