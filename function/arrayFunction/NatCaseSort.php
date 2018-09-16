<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>natcasesort()</title>
</head>
<body>
    <?php
        $arr = array('i1','i2','i9','i7','i8');
        natcasesort($arr);
        print_r($arr);
    ?>
</body>
</html>