<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>in_array()</title>
</head>
<body>
    <?php
        $arr = array('a'=>'php','b'=>'mysql','c'=>'javascript','d'=>'HTML5');
        $arr2 = array('a'=>'php','c'=>'javascript','d'=>'HTML5');
        if(in_array('mysql',$arr2)){
            echo "mysql在";
        }else{
            echo "mysql不在";
        }
    ?>
</body>
</html>