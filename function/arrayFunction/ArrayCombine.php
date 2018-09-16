<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>array_combine()</title>
</head>
<body>
    <?php
        $arr = array('one','two','three','four','five','six','seven','eight');
        $arr2 = array('oval','tval','tval','fval','f2val','sval','s2val','eval');
        $arr3 = array_combine($arr,$arr2);
        print_r($arr3);
    ?>
</body>
</html>