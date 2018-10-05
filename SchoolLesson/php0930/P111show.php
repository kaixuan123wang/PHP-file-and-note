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
    if(isset($_POST["sbt"])){
        $title = $_POST["title"];
        $text = $_POST["text"];
        $type = $_POST["type"];
    }else{
        echo "<script>location.href='P111.php'</script>";
    }

?>
<header>
    <div>
        <h1>查看消息</h1>
    </div>
</header>
<article>
        <p>
            <label for="title">标题：</label>
            <?php
                echo ($title)?$title:"无";
            ?>
        </p>
        <p>
            <label for="text">内容：</label>
            <?php
                echo ($text)?$text:"无";
            ?>
        </p>
        <p>
            <label for="type">类别：</label>
            <?php
                echo $type;
            ?>
        </p>
</article>
</body>
</html>