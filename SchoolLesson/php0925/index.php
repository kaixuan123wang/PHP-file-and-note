<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
	$str1 = "AAA";
	$str2 = "$str1 BBB<br>";
	$str3 = '$str1 BBB<br>';
$str = <<<LLL
Lorem ipsum dolor sit amet, 
consectetur adipisicing elit. 
Optio iure, sint voluptatibus 
aliquam nobis pariatur voluptas 
vel ullam! Incidunt fugit provident 
temporibus excepturi sint assumenda 
harum velit, nesciunt veniam quidem, 
aperiam tenetur consequatur illum aut!
 Distinctio, quasi vel adipisci cumque,
totam aliquid magni quis, id alias excepturi
asperiores impedit nam.<br>
LLL;
echo "<pre>";
echo $str,$str2,$str3;
 ?>
</body>
</html>