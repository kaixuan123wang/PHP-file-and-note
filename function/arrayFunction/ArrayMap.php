<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>array_map()</title>
</head>
<body>
    <?php
        $arr = array('a'=>'14','b'=>'mysql','c'=>'javascript','d'=>'HTML5');
        function arra($n){
            return ($n*9);
        }
        print_r(array_map("arra",$arr));
    ?>
</body>
</html>