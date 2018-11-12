<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>注册</title>
	<style>
		*{
			margin: 0;
			padding: 0;
		}
		div{
			margin: 0 auto;
			border: 1px solid #000;
			width: 300px;
			padding-bottom: 10px;
		}
		h3{
			width: 300px;
			height: 50px;
			background: #f90;
			color: #fff;
		}
		p{
			height: 30px;
			margin-left: 10px;
			line-height: 50px;
		}
		.sub{
			text-align: center;
		}
		.sub input{
			width: 50px;
			height: 20px;
		}
	</style>
</head>
<body>
	<div>
		<form action="add.php" method="post">
		<h3>用户注册</h3>
			<p>
				<label>名字</label>
				<label for="name">
					<input type="text" name="name" id="name">
				</label>
			</p>
			<p>
				<label>性别</label>
				<label for="s1">
					<input type="radio" name="sex" id="s1" value="男" checked="checked">男
				</label>
				<label for="s2">
					<input type="radio" name="sex" id="s2" value="女">女
				</label>
			</p>
			<p class="sub">
				<input type="submit" value="保存" name="sbt">
				<input type="reset" value="取消" name="reset">
			</p>
		</form>
	</div>
</body>
</html>