<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>compact()</title>
</head>
<body>
    <?php
        $a=2;
        $b=3;
        $c=8;
        $all = compact('a','b','c');
        print_r($all);
    ?>
</body>
</html>