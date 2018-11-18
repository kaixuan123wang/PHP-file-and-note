<?php 
    
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>数据浏览页面</title>
    <link rel="stylesheet" href="style/browse.css">
</head>
<body>
        <?php include("header.php");?>
    <article>
        <table border="1" cellspacing="0">
            <tr class="head">
                <td name="select" id="sel" class="sel"></td>
                <td class="id">id</td>
                <td class="name">书名</td>
                <td class="price">价格</td>
                <td class="time">出版时间</td>
                <td class="kind">类别</td>
                <td class="do">操作</td>
            </tr>
            <form action="deletes.php" method="post" name="form">
            <?php
                include("conn.php");
                $everypage = 3;
                if(!isset($_GET["page"])){
                    $page = 1;
                }else{
                    $page = $_GET["page"];
                }
                $pages = ($page-1)*$everypage;
                $allPage = ceil($);
                $sql = "select * from tb_demo02 limit $pages,$everypage";
                $result = mysql_query($sql);
                while ($arr = mysql_fetch_array($result)){
            ?>
            <tr>
                <td class="sel">
                    <input type="checkbox" name="select[]" value=<?php echo "$arr[0]";?> id="sel">
                </td>
                <td class="id"><?php echo $arr[0];?></td>
                <td class="name"><?php echo $arr[1];?></td>
                <td class="price"><?php echo $arr[2];?></td>
                <td class="time"><?php echo $arr[3];?></td>
                <td class="kind"><?php echo $arr[4];?></td>
                <td class="do">
                    <a href=<?php echo "update.php?id='$arr[0]'";?>>修改</a>
                    /
                    <a href=<?php echo "delete.php?id='$arr[0]'";?> onclick="javascript:return del()" >删除</a>
                </td>
            </tr>
            <?php }?>
            <tr class="page">
                <td colspan="7">
                    <a href="browse.php?page=1">首页</a>
                    <a href="browse.php?page=<?php echo $page-1?>">上一页</a>
                    <a href="browse.php?page=<?php echo $page+1?>">下一页</a>
                    <a href="browse.php?page=">尾页</a>
                    <input type="number" name="page">
                    <input type="submit">
                </td>
            </tr>
            <tr class="allDel">
                <td colspan="7">
                    <a href="#" onclick="javascript:allDel(true)">全部选择</a>
                    /
                    <a href="#" onclick="javascript:allDel(false)">取消</a>
                    <input type="submit" value="删除选择" onclick="javascript:return del()">
                </td>
            </tr>
            </form>
        </table>
    </article>
        <?php include("footer.php");?>
        <script>
            var $ = function (sel) {
                return document.querySelectorAll(sel);
            };
            var $sel = $("#sel");
            function del() {
                return confirm("您确定删除数据吗？");
            }
            function allDel($change){
                for (var i=0;i<$sel.length;i++){
                    $sel[i].checked = $change;
                }
            }
        </script>
</body>
</html>