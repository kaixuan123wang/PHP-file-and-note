<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>添加学生信息</title>
	<style>
		* {
			padding: 0;margin: 0;
		}
		.page {
			width: 500px;
			border: 1px solid #f30;
			margin: 10px;
		}
		.page h4 {
			height: 25px;
			background-color: #f30;
			font-weight: normal;
			padding-left: 10px;
			line-height: 25px;
		}
		.page p {
			text-align: center;
		}
	</style>
</head>
<body>
	<div class="page">
		<form action="saveCol.php" method="post" name="addFrm" onsubmit="return chkFrm()">
		<h4>栏目添加</h4>
		<p><label for="uid">输入栏目：</label><input type="text" name="colName" id="uid"></p>
		<p><label for="colUrl">输入栏目地址：</label><input type="text" name="colUrl"></p>
		<p><label for="pwd">是否显示：</label><label for="colShow">是</label><input type="radio" name="colShow" value="1"><label for="colShow">否</label><input type="radio" name="colShow" value="0" checked="checked"></p>
		<p><input type="submit" value="保存" name="btnSave"></p>	
		</form>	
	</div>
	<script>
		function chkFrm(){
			if(addFrm.colName.value == ""){
				alert("栏目名不能为空！");
				addFrm.uid.focus();
				return false;
			}
			if(addFrm.colUrl.value == ""){
				alert("栏目地址不能为空！");
				addFrm.uid.focus();
				return false;
			}
		}
	</script>
</body>
</html>