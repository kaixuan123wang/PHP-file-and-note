<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>NBA明星投票系统</title>
	<style>
		*{
			margin: 0;
			padding: 0;
		}
		.over{
			width: 200px;
			margin: 10px auto;
			border: 1px solid #f90;
		}
		h3{
			width: 200px;
			height: 50px;
			background: #F90;
			font: 20px/50px YaHei;
			text-align: center;
		}
		p{
			margin: 5px 0;
			padding-left: 20px;
		}
	</style>
</head>
<body>
	<div class="over">
		<h3>NBA明星投票系统</h3>
		<form action="4.php" method="get">
			<p><input type="radio" name="voit" value="0">乔丹</p>
			<p><input type="radio" name="voit" value="1">安东尼</p>
			<p><input type="radio" name="voit" value="2">科比</p>
			<p><input type="radio" name="voit" value="3">欧文</p>
			<p><input type="radio" name="voit" value="4">库里</p>
			<p>
				<input type="submit" value="投票" name="Btn">
				<input type="button" value="查看">
			</p>
		</form>
	</div>
</body>
</html>