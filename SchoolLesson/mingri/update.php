<?php
if(isset($_GET["id"])){
    include ("conn.php");
    $id = $_GET["id"];
    $sql = "select * from tb_demo02 where id = $id";
    $result = mysql_query($sql);
    $arr = mysql_fetch_array($result);
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        form p{
            text-align: center;
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <?php
        include("header.php");
    ?>
<article>
    <form action="update_ok.php?id=<?php echo $arr[0];?>" method="post">
        <p><label for="name">书名：<input type="text" value=<?php echo $arr[1];?> name="name"></label></p>
        <p><label for="price">价格：<input type="text" name="price" value=<?php echo $arr[2];?>></label></p>
        <p><label for="time">出版时间：<input type="date" name="time" value=<?php echo $arr[3];?>></label></p>
        <p><label for="kind">类别：<input type="text" name="kind" value=<?php echo $arr[4];?>></label></p>
        <p>
            <input type="submit" value="更新" name="update">
            <input type="button" value="返回" onclick="javascript :history.back(-1);">
        </p>
    </form>
</article>
    <?php
        include("footer.php");
    ?>
</body>
</html>
