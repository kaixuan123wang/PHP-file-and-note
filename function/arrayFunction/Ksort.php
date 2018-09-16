<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ksort()</title>
</head>
<body>
    <?php
        $arr = array('a'=>'php','c'=>'mysql','b'=>'javascript','d'=>'HTML5');
        ksort($arr);
        print_r($arr);
    ?>
</body>
</html>