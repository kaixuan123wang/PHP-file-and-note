<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>array_reduce()</title>
</head>
<body>
    <?php
        $arr = array(1,2,3,4,5,6,7,89);
        function ss($a,$b){
            $a += $b;
            return $a;
        }
        echo(array_reduce($arr,"ss"));
    ?>
</body>
</html>