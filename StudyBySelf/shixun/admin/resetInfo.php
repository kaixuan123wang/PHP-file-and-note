<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		.all>form>ul>li{
			display: flex;
			flex-flow: row nowrap;
			justify-content: space-between;
			height: 5vw;
			min-height: 14px;
		}
		.sbt{
			text-align: center;
		}
		.sbt input{
			margin: 10px;
		}
	</style>
</head>
<body>
	<?php
		if(isset($_SESSION["key"])){
			include("conn.php");
			$id = $_SESSION["key"];
			$sql = "select * from adminUser where uid = $id";
			$result = mysql_query($sql);
			$arr = mysql_fetch_array($result);
		}else{

		}
		
	?>
	<div class="all">
		<form action="restInfo_finish.php" method="get" name="frm" onsubmit="return chkFrm();">
		<ul>
			<li>
				<div class="left">ID编号</div>
				<div class="right"><?php echo $arr["uid"];?></div>
			</li>
			<li>
				<div class="left">账号</div>
				<div class="right"><?php echo $arr["user"];?></div>
			</li>
			<li>
				<div class="left">账号所有人</div>
				<div class="right">
					<input type="text" name="nickName" required value=<?php echo $arr["nickName"];?> >
				</div>
			</li>
			<li>
				<div class="left">性别</div>
				<div class="right">
					<select name="sex" id="sex" >
						<option value="保密" <?php echo ($arr["sex"]=="保密")?"selected = 'selected'":""?>>保密</option>
						<option value="男" <?php echo ($arr["sex"]=="男")?"selected = 'selected'":""?>>男</option>
						<option value="女" <?php echo ($arr["sex"]=="女")?"selected = 'selected'":""?>>女</option>
					</select>
				</div>
			</li>
			<li>
				<div class="left">Email</div>
				<div class="right">
					<input type="email" name="email" value=<?php echo $arr["email"];?>>
					</div>
			</li>
			<li>
				<div class="left">QQ</div>
				<div class="right">
					<input type="number" name="qq" value=<?php echo $arr["qq"];?>>
					</div>
			</li>
		</ul>
		<div class="sbt">
				<input type="submit" value="确认修改" name="resetAdmin_sbt">
				<input type="reset" value="恢复默认">
			</div>
		</form>
	</div>
	<script>
		function trim(str){ //删除左右两端的空格
　　     return str.replace(/(^\s*)|(\s*$)/g, "");
　　 }
        function chkFrm(){
            if(trim(frm.nickName.value) == ""){
                alert("所有人不能为空");
                return false;
            }
        }
	</script>
</body>
</html>