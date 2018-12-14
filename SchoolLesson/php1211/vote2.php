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
			<form action="saveVote2.php" method="post">
			<p>
				<select name="sel" id="sel">
					
				<option value="太棒了">太棒了</option>
				
				<option value="很棒">很棒</option>
				
				<option value="一般般">一般般</option>
				
				<option value="没玩过">没玩过</option>
				</select>
			</p>
			<p>
				<input type="submit" value="提交" name="sbt">
				<input type="reset" value="重置">
			</p>
			</form>
		</div>
	</div>
</body>
</html>