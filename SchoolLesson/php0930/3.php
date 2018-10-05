<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	echo "当前服务器IP是<b>".$_SERVER['SERVER_ADDR']."</b><br>";
	echo "当前服务器主机名称是<b>".$_SERVER['SERVER_NAME']."</b><br>";
	echo "客户端IP是<b>".$_SERVER['REMOTE_ADDR']."</b><br>";
	echo "客户端连接到主机所使用的端口是<b>".$_SERVER['REMOTE_PORT']."</b><br>";
	echo "当前运行的脚本所在文档的根目录是<b>".$_SERVER['DOCUMENT_ROOT']."</b><br>";
	?>
</body>
</html>