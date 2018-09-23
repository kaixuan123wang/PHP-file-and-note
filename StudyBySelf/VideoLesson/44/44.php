<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>图形计算（使用面向对象技术开发）</title>
</head>
<body>
    <center>
        <h1>图形（周长&面积）计算器</h1>
        <a href="44.php?action=rect">矩形</a> ||
        <a href="44.php?action=triangle">三角形</a> ||
        <a href="44.php?action=circle">圆形</a>
        <hr>
    </center>
    <?php
    //设置错误报告级别
        error_reporting(E_ALL & ~E_NOTICE);
    //自动加载需要的类
        function __autoload($className){
            include strtolower($className).".class.php";
        }
        $form = new Form();
        echo $form;
        if(isset($_POST["sub"])){
            echo new Result();
        }
    ?>
</body>
</html>