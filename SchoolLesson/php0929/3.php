<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<div class="page">
		<h3>请添加用户信息</h3>
		<div class="frm">
			<form action="5.php" method="post">
				<p>
					<label for="nick">昵称：</label>
					<input type="text" name="nick">
				</p>
				<p>
					<label for="pwd">密码：</label>
					<input type="password" name="pwd">
				</p>
				<p>
					<label for="sex">性别：</label>
					<label><input type="radio" name="sex" id="sex1"checked="checked" value="男">男</label>
					<label><input type="radio" name="sex" id="sex2" value="女">女</label>
				</p>
				<p>
					<label for="hobby">爱好：</label>
					<label><input type="checkbox" name="hobby[]" id="h1" value="上网">上网</label>
					<label><input type="checkbox" name="hobby[]" id="h1" value="看书">看书</label>
					<label><input type="checkbox" name="hobby[]" id="h1" value="玩游戏">玩游戏</label>
					<label><input type="checkbox" name="hobby[]" id="h1" value="睡觉">睡觉</label>
				</p>
				<p>
					<label for="resume">学历：</label>
					<select name="resume" id="resume">
						<option>大专</option>
						<option>本科</option>
						<option>硕士</option>
						<option>博士</option>
					</select>
				</p>
				<p>
					<input type="submit" value="保存信息" name="sbt">
					<input type="reset" value="重置">
				</p>
			</form>
		</div>
	</div>
</body>
</html>