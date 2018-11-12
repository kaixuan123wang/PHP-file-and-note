<?php
	
	if(isset($_GET["sbtAdd"])){
		include("conn.php");
		$name = $_GET["name"];
		$price = $_GET["price"];
		$time = $_GET["time"];
		$kind = $_GET["kind"];
		$sql = "insert into tb_demo02(bookname,price,f_time,type) values('$name','$price','$time','$kind')";
		$result = mysql_query($sql);
	}else{
		echo "<script>location.href='index.php';</script>";
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php include("header.php");?>
	<article>
	<?php 
	if($result){
			echo "<p>数据添加成功，点击<a href='browse.php'>这里</a>查看</p>";
		}else{
			echo "<p>数据添加失败，点击<a href='index.php'>这里</a>重新添加</p>";
		}
	?>
		
	</article>
	<?php include("footer.php");?>
</body>
</html>