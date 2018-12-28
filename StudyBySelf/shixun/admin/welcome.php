<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        .all{
            width: 100%;
            height: 500px;
        }
        .all h1,.all p{
            text-align: center;
            line-height: 250px;
        }
    </style>
</head>
<body>
    <div class="all">
        <h1>欢迎登录论坛后台</h1>
        <p>请选择侧边栏功能进行修改</p>
    </div>
    <script>
        if (window.top==self){
            location.href='./backStage.php';
        }
    </script>
</body>
</html>