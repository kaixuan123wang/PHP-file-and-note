<?php 
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="keywords" content="IT,论坛,程序员,前端,后端">
    <meta name="description" content="此网站主要用于作品展示，实时更新最新作品，包括HTML代码、CSS代码、JavaScript代码、PHP代码、H5+Css3代码及网站原型，供本行业人士参考借鉴，以达到与本行业其他人员更加亲近的交流与分享的目的。" />
    <title>IT之猿</title>
    <link href="admin/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">
    <link rel="icon" href="images/logo.png" type="image/png">
    <script type="text/javascript" src="admin/third-party/jquery.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="admin/umeditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="admin/umeditor.min.js"></script>
    <script type="text/javascript" src="admin/lang/zh-cn/zh-cn.js"></script>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
<?php include ("head.php");?>
<div class="article">
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
                $count = mysql_num_rows($result);
                while($arr = mysql_fetch_array($result)){
                    $id = $arr["id"];
                    $title = $arr["title"];
                    $time = $arr["time"];
                    $seeNum = $arr["seeNum"];
            ?>
            <li>
                <div class="left">
                    <a href=<?php echo "noticeSee.php?id=$id"?>><img src="images/ann_icon.gif" alt="公告"><span>公告 :</span><?php echo $title;?></a>
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
            $pageShow = 15;
            (isset($_GET["column"]))?$column = $_GET["column"]:$column = "all";
            if($column != "all"){
                $sql = "select * from article where type = '$column'";
                $changeType = " where type = '$column '";
                
            }else{
                $sql = "select * from article";
                $changeType = "";
            }
            $result = mysql_query($sql);
            $count += mysql_num_rows($result);
            $pageNum = ceil($count/$pageShow);
            (isset($_GET["pages"]))?$pages = $_GET["pages"]:$pages = 1;
            if($pageNum<$pages){
                echo "<script>location.href='index.php?column=".$column."&pages=".$pageNum."';</script>";
            }
            $startNum = ($pages-1)*$pageShow;
            $sql = "select * from article " .$changeType." order by id desc limit $startNum,$pageShow";
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
                    $nameId = $arr1["observerId"];
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
                        <a href=<?php echo "articleSee.php?id=$id"?>><img src="images/folder_common.gif" alt="类型"><span>
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
                            <a href=<?php echo "information.php?id=$actorId";?>><?php echo $actor;?></a>
                            <time><?php echo $time;?></time>
                        </em>
                        <em>
                            <a href=<?php echo "articleSee.php?id=$id";?>><?php echo $obsNum;?></a>
                            <span><?php echo $seeNum;?></span>
                        </em>
                        <em>
                            <a href=<?php echo "articleSee.php?id=$id"?>><?php echo $name;?></a>
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
                <a href="javascript:document:upload.submit();" onclick="return chkFrm();">
                    <img src="images/pn_post.png" alt="发帖">
                </a>
            </div>
            <div class="right">
                <ul>
                    <li><a href="javascript:history.back()">返回</a></li>
                    <?php
                    if($pageNum > 5){
                        for($i = 1;$i<=5;$i++){
                    ?>
                    <li onclick="window.location='index.php?column=<?php echo $column;?>&pages=<?php echo $i;?>';"><?php echo $i;?></li>
                <?php }?>
                    <li onclick="window.location='index.php?column=<?php echo $column;?>&pages=<?php echo $pageNum;?>'">.../<?php echo $pageNum;?></li>
                    <li>
                            <input type="text" title="输入页数按下回车键跳转" name="pages" onkeydown="if(event.keyCode == 13){window.location='index.php?column=<?php echo $column;?>&pages='+this.value;}">
                            /<?php echo $pageNum;?>页
                    </li>
                    <?php
                    }else{
                        for($i=1;$i<=$pageNum;$i++){
                        ?>
                            <li onclick="window.location='index.php?column=<?php echo $column;?>&pages=<?php echo $i;?>';"><?php echo $i?></li>
                    <?php 
                    }}
                        $nextPage = $pages+1;
                        if($nextPage<=$pageNum){
                    ?>
                    <li>
                        <a href= <?php  echo "index.php?column=".$column."&pages=".$nextPage; ?> >下一页</a>
                    </li>
                <?php }?>
                </ul>
            </div>
        </div>
        <div class="fatie">
            <form action="addContent.php" method="post" name="upload" id="contents">
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
                       <input type="text" name="title" id="title" maxlength="20">
                   </div>
                </div>
                <script type="text/plain" id="myEditor" name="content" style="width:100%;height:18vw;min-height: 200px">
                    <p>在此输入文章内容</p>
                </script>
            </form>
        </div>
    <!-- 实例化编辑器 -->
    <script type = "text/javascript">
        var um = UM.getEditor('myEditor');
     </script>
                <script>
                    function chkFrm(){
                        if(upload.title.value == ""){
                            alert("标题不能为空！");
                            return false;
                        }
                        if(upload.content.value == ""){
                            alert("文章内容不能为空！");
                            return false;
                        }
                    }
                </script>
</body>
</html>