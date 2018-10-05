<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	if(!isset($_POST["sbt"])){
		echo "<script>location.href='1.php';</script>";
	}elseif($_FILES["f"]["size"]>0 and is_uploaded_file($_FILES["f"]["tmp_name"])){
		$path = time().rand(1000,9999).".jpg";
		move_uploaded_file($_FILES["f"]["tmp_name"],"upload/".$path);
		echo "上传成功";
	}else{
		echo "<script>location.href='1.php';</script>";
	}

	?>
</body>
</html>