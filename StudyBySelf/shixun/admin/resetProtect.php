<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="resetProtect_finish.php" method="post" name="frm" onsubmit="return chkFrm();">
		<input type="hidden" name="uid" value=<?php echo $_GET["id"];?>>
		<p>
			<label for="protect">
			密保问题：
			</label>
				<select name="protect" id="protect">
				<option value="你的妈妈叫什么">您的妈妈叫什么</option>
	            <option value="你的爸爸叫什么">您的爸爸叫什么</option>
	            <option value="家庭住址">您的家庭住址是哪里</option>
	            <option value="您的生日是多少">您的生日是多少</option>
	            <option value="您叫什么名字">您叫什么名字</option>
			</select>
		</p>
		<p>
			<label for="answer">密保答案</label>
			<input type="text" name="answer" id="answer">
		</p>
		<p>
			<input type="submit" value="提交" name="resetPro_sbt">
			<input type="reset" value="重置">
		</p>
	</form>
	<script>
        if (window.top==self){
            location.href='./backStage.php';
        }
        function trim(str){ //删除左右两端的空格
　　     return str.replace(/(^\s*)|(\s*$)/g, "");
　　 }
        function chkFrm(){
            if(trim(frm.answer.value) == ""){
                alert("答案不能为空");
                return false;
            }
        }
    </script>
</body>
</html>