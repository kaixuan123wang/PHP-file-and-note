<?php
session_start();
?>
<?php
            include("head.php");
            if(isset($_GET["id"])){
                include ("admin/conn.php");
                $id = $_GET["id"];
                
                $sql = "select * from article where id = $id";
                $result = mysql_query($sql);
                if(mysql_num_rows($result) < 1){
                    echo "<script>alert('未找到此文章')</script>";
                }else{
                    $sql = "update article set seeNum = seeNum + 1 where id = $id";
                    mysql_query($sql);
                    $arr = mysql_fetch_array($result);
                    $title = $arr["title"];
                    $content = $arr["content"];
                    $type = $arr["type"];
                    $actorId = $arr["actorId"];
                    $time = $arr["time"];
                    $sql = "select * from touristUser where uid = $actorId";
                    $result = mysql_query($sql);
                    $arr = mysql_fetch_array($result);
                    $nickName = $arr["nickName"];
                    $image = $arr["image"];
                    $explains = $arr["explains"];
                }
            }else{
                echo "<script>location.href='index.php';</script>";
            }
        ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title."--IT之猿";?></title>
    <link rel="stylesheet" href="css/articleSee.css">
    <meta http-equiv="keywords" content="IT,论坛,程序员,前端,后端">
    <meta name="description" content="此网站主要用于作品展示，实时更新最新作品，包括HTML代码、CSS代码、JavaScript代码、PHP代码、H5+Css3代码及网站原型，供本行业人士参考借鉴，以达到与本行业其他人员更加亲近的交流与分享的目的。" />
<link rel="icon" href="images/logo.png" type="image/png">
</head>
<body>
    <div class="all">
        
        <div class="up">
            <div class="left">
                <p>
                    <img src=<?php echo $image;?> alt="头像">
                </p>
                <p><?php echo $nickName;?></p>
                <p>个性签名：<?php echo $explains;?></p>
                <p>
                    <a href=<?php echo "information.php?id=$actorId";?>>查看作者资料</a>
                </p>
            </div>
            <div class="right">
                <div class="header">
                    <h2><?php echo $title?></h2>
                    <time><?php echo $time;?></time>
                </div>
                <div class="content">
                    <?php echo $content;?>
                </div>
            </div>
        </div>
        <?php
            if(isset($_SESSION["uid"])){
                $uid = $_SESSION["uid"];
            }else{
                $uid = "null";
            }
        ?>
        <div class="down">
            <ul>
                <li>
                    <form action="addObs.php" method="post">
                        <input type="hidden" value=<?php echo $uid;?> name="obserId">
                        <input type="hidden" name="articleId" value=<?php echo $id;?>>
                        <p class="textarea">
                            <textarea name="obsContent" id="obsContent" cols="220" rows="10"></textarea>
                        </p>
                        <p class="obs_sbt">
                            <input type="submit" value="发表评论" name="obs_sbt">
                        </p>
                    </form>
                </li>
        <?php
            $sql = "select * from observe where articleId = $id order by time desc";
            $result = mysql_query($sql);
            if($result){
            while($arr = mysql_fetch_array($result)){
                $obsId = $arr["observerId"];
                $obsContent = $arr["content"];
                $obsTime = $arr["time"];
                $sql2 = "select * from touristUser where uid = $obsId";
                $result2 = mysql_query($sql2);
                if($result2){
                    $arr2 = mysql_fetch_array($result2);
                    $obsName = $arr2["nickName"];
                    $obsImg = $arr2["image"];
        ?>
        
                <li>
                    <div class="top">
                        <p>
                            <a href=<?php echo "information.php?id=$obsId"?>>
                                <img src=<?php echo $obsImg;?> alt="头像">
                                <?php echo $obsName;?>
                            </a>
                        </p>
                    </div>
                    <div class="observe">
                        <p>
                            <?php echo $obsContent;?>
                        </p>
                        <time>
                            <?php echo $obsTime;?>
                        </time>
                    </div>
                </li>
                <?php }}}?>
            </ul>
        </div>
    </div>
</body>
</html>