<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>发布内容</title>
	<link href="themes/default/css/umeditor.css" type="text/css" rel="stylesheet">
    <script type="text/javascript" src="third-party/jquery.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="umeditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="umeditor.min.js"></script>
    <script type="text/javascript" src="lang/zh-cn/zh-cn.js"></script>
    <style>
		.page {
			width: 800px;			
		}
		.page label {
			display: block;
		}
		.ipt1 {
			width: 400px;
		}
		.page p {
			margin: 0;
			padding: 0;
		}
    </style>
</head>
<body>
<div class="page">
<form action="saveContent.php" method="post" name="addFrm" onsubmit="return chkFrm();">
<p>
	<label for="toptic">内容标题：</label>	
	<input type="text" name="toptic" id="toptic" class="ipt1">
</p>
<p>
	<label for="author">内容作者：</label>
	<input type="text" name="author" id="author">
</p>
<p>
	<label for="column">内容类别：</label>
	<select name="column">
		<?php 
			include("conn.php");
			$sql = "select * from tb_column";
			$result = mysql_query($sql);
			while($rs= mysql_fetch_array($result)){
		?>
		<option><?php echo $rs["colName"]; ?></option>	
		<?php } ?>	
	</select>
</p>
<label for="myEditor">输入内容：</label>
<script type="text/plain" id="myEditor" name="content" style="width:100%;height:240px;">
    <p>这里我可以写一些输入提示</p>
</script>
<p>
	<input type="submit" value="保存内容">
</p>	
</form>
</div>
	<!--style给定宽度可以影响编辑器的最终宽度-->
<script>
		function chkFrm(){
			if(addFrm.toptic.value == ""){
				alert("内容标题不能为空！");
				addFrm.toptic.focus();
				return false;
			}
			if(addFrm.author.value == ""){
				alert("内容作者不能为空！");
				addFrm.author.focus();
				return false;
			}			
		}
	</script>
<!-- 实例化编辑器 -->
<script type="text/javascript">
    var um = UM.getEditor('myEditor');
</script>

</body>
</html>
