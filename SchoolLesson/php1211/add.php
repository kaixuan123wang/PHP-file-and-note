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
			margin: 0 auto;
			border: 1px solid #f00;
		}
		.all h1{
			font-size: 20px;
			text-align: center;
			color: #000;
			background: #f00;
		}
		.all p{
			height: 30px;
			width: 300px;
		}
		.all input{
			width: 100px;
		}
		.all label{
			display: inline-block;
			width: 80px;
			text-align: right;
		}
		.all .content{
			height: 200px;
		}
	</style>
</head>
<body>
	<div class="all">
		<h1>留言栏</h1>
		<form action="save.php" method="post">
			<p>
				<label for="userName">留言人：</label>
				<input type="text" name="userName" id="userName">
			</p>
			<p>
				<label for="email">电子邮箱：</label>
				<input type="email" name="email" id="email">
			</p>
			<p>
				<label for="subject">留言主题：</label>
				<input type="text" name="subject" id="subject">
			</p>
			<p class="content">
				<label for="content">留言内容：</label>
				<textarea name="content" id="content" cols="40" rows="11"></textarea>
			</p>
			<p>
				<input type="submit" value="提交" name="sbt">
				<input type="reset" value="重置">
			</p>
		</form>
	</div>
</body>
</html>