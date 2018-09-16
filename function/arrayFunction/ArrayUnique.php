<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>array_unique()</title>
</head>
<body>
    <?php
        $arr = array('a'=>'php','b'=>'HTML5','c'=>'javascript','d'=>'HTML5');
        print_r(array_unique($arr));
    ?>
</body>
</html>