<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>array_udiff()</title>
</head>
<body>
    <?php
        $arr = array('a'=>'php','b'=>'mysql','c'=>'javascript','d'=>'HTML5');
        $arr2 = array('a'=>'php','B'=>'mysql','c'=>'Javascript','d'=>'HTML5');
        function kee($a,$b){
            if($a === $b){
                return 0;
            }else{
                return ($a>$b)?1:-1;
            }
        }
        print_r(array_udiff($arr,$arr2,"kee"));
    ?>
</body>
</html>