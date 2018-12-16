<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IT之猿</title>
    <link href="admin/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">
    <script type="text/javascript" src="admin/third-party/jquery.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="admin/umeditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="admin/umeditor.min.js"></script>
    <script type="text/javascript" src="admin/lang/zh-cn/zh-cn.js"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        a {
            text-decoration: none;
            color: #000;
            font-size: 1rem;
        }

        .nav {
            width: 100%;
        }

        .nav ul {
            display: flex;
            flex-flow: row nowrap;
            justify-content: center;
            margin-left: 2%;
            list-style: none;
        }

        .nav ul li {
            width: 16%;
            text-align: center;
        }

        .nav ul li a {
            display: inline-block;
            width: 100%;
            height: 50px;
            line-height: 50px;
            border: 1px solid #000;
        }

        .content .list li, .content .title {
            display: flex;
            flex-flow: row nowrap;
            justify-content: space-between;
            width: 96%;
            height: 50px;
            border: 1px solid #000;
            margin-left: 2%;
        }

        .content .title {
            height: 30px;
        }

        .content .title div {
            width: 50%;
            height: 30px;
            line-height: 30px;
        }

        .content .title .left em , .content .list li .left a span{
            display: inline-block;
            width: 85px;
            text-align: center;
        }

        .content .title .right {
            display: flex;
            flex-flow: row nowrap;
            justify-content: space-around;
        }

        .content .title .right em {
            width: 100px;
            height: 30px;
            text-align: center;
        }

        .content .list li div {
            width: 50%;
            height: 50px;
        }

        .content .list li .left {
            line-height: 50px;
        }

        .content .left li .left a {
            margin-left: 10px;
        }

        .content .list li .right {
            display: flex;
            flex-flow: row nowrap;
            justify-content: space-around;
        }

        .content .list li .right em {
            display: flex;
            flex-flow: column nowrap;
            justify-content: center;
            width: 100px;
            height: 50px;
            text-align: center;
        }
        .content .list li .right em time{
            font-size: 10px;
            margin-top: 5px;
        }

        .next {
            display: flex;
            flex-flow: row nowrap;
            justify-content: space-between;
            width: 96%;
            margin: 10px 2%;
        }

        .next .right ul {
            display: flex;
            flex-flow: row nowrap;
            justify-content: space-around;
            list-style: none;
        }

        .next .right ul li {
            border: 1px solid #000;
            min-width: 50px;
            text-align: center;
            padding: 0 5px;
        }
        .fatie{
            width: 96%;
            margin-left: 2%;
        }
        .header{
            display: flex;
            flex-flow: row nowrap;
            justify-content: space-between;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
<?php include ("head.php");?>
<div class="article">
    <div class="nav">
        <ul>
            <li><a href="index.php?column=question">问题求助</a></li>
            <li><a href="index.php?column=exchange">技术交流</a></li>
            <li><a href="index.php?column=show">作品展示</a></li>
            <li><a href="index.php?column=share">资源分享</a></li>
            <li><a href="index.php?column=course">系列教程</a></li>
            <li><a href="index.php?column=note">学习笔记</a></li>
        </ul>
    </div>
    <div class="content">
        <div class="title">
            <div class="left">
                <em>文章类型</em>
                <em>文章标题</em>
            </div>
            <div class="right">
                <em>作者</em>
                <em>回复/查看</em>
                <em>最后发表</em>
            </div>
        </div>
        <ul class="list">
            <?php
                include ("admin/conn.php");
                $sql = "select * from notice";
                $result = mysql_query($sql);
                while($arr = mysql_fetch_array($result)){
                    $id = $arr["id"];
                    $title = $arr["title"];
                    $time = $arr["time"];
                    $seeNum = $arr["seeNum"];
            ?>
            <li>
                <div class="left">
                    <a href="#"><img src="images/ann_icon.gif" alt="公告"><span>公告 :</span><?php echo $title;?></a>
                </div>
                <div class="right">
                    <em>
                        <a href="#">管理员</a>
                        <time><?php echo $time;?></time>
                    </em>
                    <em>
                        <a href="#">无</a>
                        <span><?php echo $seeNum;?></span>
                    </em>
                    <em>
                        <a href="#">无</a>
                    </em>
                </div>
            </li>
            <?php }?>
            <?php
            if(isset($_GET["column"]) and $_GET["column"] != "all"){
                $column = $_GET["column"];
                $sql = "select * from article where type = '$column'";
            }else{
                $column = "all";
                $sql = "select * from article";
            }
            $result = mysql_query($sql);
            if(mysql_num_rows($result) > 0){
            while($arr = mysql_fetch_array($result)){
                $id = $arr["id"];
                $title = $arr["title"];
                $time = $arr["time"];
                $seeNum = $arr["seeNum"];
                $type = $arr["type"];
                $actorId = $arr["actorId"];
                $sql = "select * from touristUser where uid = '$actorId'";
                $result1 = mysql_query($sql);
                $info = mysql_fetch_array($result1);
                $actor = $info["nickName"];
                $sql = "select * from observe where articleId = '$id'order by id desc";
                $result2 = mysql_query($sql);
                $obsNum = mysql_num_rows($result2);
                if($obsNum > 0){
                    $arr1 = mysql_fetch_array($result2);
                    $nameId = $arr1["observerid"];
                    $obsTime = $arr1["time"];
                    $sql = "select * from touristUser where uid = '$nameId'";
                    $result3 = mysql_query($sql);
                    $arr2 = mysql_fetch_array($result3);
                    $name = $arr2["nickName"];
                }else{
                    $obsNum = 0;
                    $name = "无";
                    $obsTime = "";
                }
                ?>
                <li>
                    <div class="left">
                        <a href="#"><img src="images/ann_icon.gif" alt="公告"><span>
                                <?php
                                    switch ($type){
                                        case $type == "question":
                                            echo "问题求助";
                                            break;
                                        case $type == "exchange":
                                            echo "技术交流";
                                            break;
                                        case $type == "show":
                                            echo "作品展示";
                                            break;
                                        case $type == "share":
                                            echo "资源分享";
                                            break;
                                        case $type == "course":
                                            echo "系列教程";
                                            break;
                                        case $type == "note":
                                            echo "学习笔记";
                                            break;
                                    }
                                ?>
                            </span><?php echo $title;?></a>
                    </div>
                    <div class="right">
                        <em>
                            <a href="#"><?php echo $actor;?></a>
                            <time><?php echo $time;?></time>
                        </em>
                        <em>
                            <a href="#"><?php echo $obsNum;?></a>
                            <span><?php echo $seeNum;?></span>
                        </em>
                        <em>
                            <a href="#"><?php echo $name;?></a>
                            <time><?php echo $obsTime;?></time>
                        </em>
                    </div>
                </li>
            <?php }}?>
        </ul>
    </div>
    <div class="foot">
        <div class="next">
            <div class="left">
                <a href="#" onclick="content.submit();">
                    <img src="images/pn_post.png" alt="发帖">
                </a>
            </div>
            <div class="right">
                <ul>
                    <li><a href="javascript:history.back()">返回</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">.../45</a></li>
                    <li>
                            <input type="text" title="输入页数按下回车键跳转" name="pages" onkeydown="if(event.keyCode == 13){window.location='index.php?column=<?php echo $column;?>&pages='+this.value;}">
                            /45页
                    </li>
                    <li><a href="#">下一页</a></li>
                </ul>
            </div>
        </div>
        <div class="fatie">
            <form action="addContent.php" method="post" name="content">
                <div class="header">
                    <div class="left">
                        <label for="type">文章类型：</label>
                        <select name="type" id="type">
                            <option value="question">问题求助</option>
                            <option value="exchange">技术交流</option>
                            <option value="show">作品展示</option>
                            <option value="share">资源分享</option>
                            <option value="course">系列教程</option>
                            <option value="note">学习笔记</option>
                        </select>
                    </div>
                   <div class="right">
                       <label for="title">
                           文章标题：
                       </label>
                       <input type="text" name="title" id="title" required>
                   </div>
                </div>
                <script type="text/plain" id="myEditor" name="content" style="width:100%;height:240px;">
                    <p>在此输入文章内容</p>
                </script>
            </form>
        </div>
    <!-- 实例化编辑器 -->
    <script type = "text/javascript">
        var um = UM.getEditor('myEditor');
     </script>

</body>
</html>