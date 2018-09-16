<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>array_change_key_case()</title>
</head>
<body>
    <?php
        $arr = array('a'=>'php','b'=>'mysql','c'=>'javascript','d'=>'HTML5');
        $arr2 = array('A'=>'php','B'=>'mysql','C'=>'javascript','D'=>'HTML5');
        print_r($arr);
        echo "<br>键名小写转换为大写";
        print_r(array_change_key_case($arr,CASE_UPPER));
        echo "<br>";
        print_r($arr2);
        echo "<br>键名大写转换为小写";
        print_r(array_change_key_case($arr2,CASE_LOWER));
    ?>
</body>
</html>