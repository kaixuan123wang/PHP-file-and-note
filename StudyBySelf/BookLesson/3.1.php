<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    //将会接收：标题、姓名、Email、反映、评论并用$_POST提交。
    //为新的变量赋值：
    $title = $_POST['title'];
    $name = $_POST['name'];
    $response = $_POST['response'];
    $comments = $_POST['comments'];
    //打印接收到的数据
    print "<p>Thank you,$title $name,for your comments.</p>
            <p>You stated that you found this example to be '$response' and added:<br/>$comments</p>";
    ?>
</body>
</html>