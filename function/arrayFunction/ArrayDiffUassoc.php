<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>array_diff_uassoc()</title>
</head>
<body>
    <?php
        function key2($a,$b)
        {
            if ($a === $b) {
                return 0;
            }
            return ($a > $b) ?1:-1;
        }
        $arr = array('a'=>'php','b'=>'mysql','c'=>'javascript','d'=>'HTML5');
        $arr2 = array('php','b'=>'mysql','c'=>'js','D'=>'HTML5');
        print_r(array_diff_uassoc($arr,$arr2,"key2"));
    ?>
</body>
</html>