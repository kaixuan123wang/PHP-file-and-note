<?php
	if(isset($_POST["sbt"])){
		$sel = $_POST["sel"];
	}else{
		echo "<script>location.href='vote1.php';</script>";
	}
?>
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
		.all{
			width: 300px;
			border: 1px solid #f00;
			margin: 0 auto;
		}
		.all .head{
			width: 300px;
			height: 40px;
			text-align: center;
			background: #f00;
		}
		.all .head h1{
			font-size: 20px;
			color: #fff;
			line-height: 40px;
		}
		.all .content p,.all .content h2{
			height: 50px;
			line-height: 50px;
			text-align: center;
		}
		.all .content h2{
			font-size: 15px;
			border-bottom: 1px dashed #00f;
			font-weight: normal;
		}
	</style>
</head>
<body>
	<div class="all">
		<div class="head">
			<h1>游戏专题调查</h1>
		</div>
		<div class="content">
			<h2>您认为王者荣耀这款游戏怎么样？</h2>
			<?php 
				foreach ($sel as $value) {
			?>
			<p>
				<?php echo $value;?>
			</p>
			<?php }?>
		</div>
	</div>
</body>
</html>