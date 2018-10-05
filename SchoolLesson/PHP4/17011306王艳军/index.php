<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="reg.php" method="post">
	<p>
		<label for="nick">昵称:</label>
		<input type="text" name="nick" id="nick">
	</p>
	<p>
		<label for="face">表情:</label>
		<?php for($i=0;$i<12;$i++) {?>
		<input type="radio" name="face" id="face" value="<?php echo $i; ?>">
		<img src="face/<?php echo $i; ?>.gif">
		<?php } ?>
	</p>
	<p>
		<input type="submit" value="注册" name="submit">
	</p>
		
	</form>
</body>
</html>