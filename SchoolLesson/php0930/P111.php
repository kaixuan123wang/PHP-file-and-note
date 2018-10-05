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
    <header>
        <div>
            <h1>添加消息</h1>
        </div>
    </header>
    <article>
        <form action="P111show.php" method="post">
            <p>
                <label for="title">标题：</label>
                <input type="text" name="title">
            </p>
            <p>
                <label for="text">内容：</label>
                <textarea name="text" id="text" cols="30" rows="10"></textarea>
            </p>
            <p>
                <label for="type">类别：</label>
                <select name="type" id="type">
                    <option value="活动安排">活动安排</option>
                    <option value="企业公告" selected="selected">企业公告</option>
                </select>
            </p>
            <p>
                <input type="submit" value="提交" name="sbt">
                <input type="reset" value="重置">
            </p>
        </form>
    </article>
</body>
</html>