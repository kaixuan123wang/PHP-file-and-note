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
		.menu{
			margin: 0 auto;
			width: 950px;
			height: 30px;
			background: #ff0;
			overflow: hidden;
		}
		.menu ul{
			width: 960px;
			list-style: none;
		}
		.menu ul li{
			margin-right: 10px;
			text-align: center;
			float: left;
		}
		.menu ul li a{
			display: block;
			width: 110px;
			height: 30px;
			line-height: 30px;
			text-decoration: none;
			color: #000;
		}
		.menu>ul>li>a:hover{
			background: #ccc;
			color: #fff;
		}
	</style>
</head>
<body>
	<?php
		$menu = "首页|国内游|出境游|周边游|自驾游|酒店|宾馆|机票";
		$add ="index.php|in.php|out.php|zby.php|zjy.php|jd.php|hotel.php|fly.php";
		$navArray = explode("|",$menu);
		$addArray = explode("|",$add);
	?>
	<div class="menu">
		<ul><?php foreach($navArray as $key=>$value){ ?>
			<li><a href="<?php echo $addArray[$key]; ?>"><?php echo $value; ?></a></li>
			<?php } ?>
		</ul>
	</div>
</body>
</html>