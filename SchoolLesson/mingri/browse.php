<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        a{
            text-decoration: none;
            color:#000;
        }
        table{
            position: relative;

            margin:0 auto;
            width: 95%;
        }
        table tr{
            height: 40px;
            text-align: center;
        }
        .head{
            background: #999;
        }
        .id{
            width: 5%;
        }
        .name{
            width: 30%;
        }
        .price{
            width: 10%;
        }
        .time{
            width:30%;
        }
        .kind{
            width: 10%;
        }
        .do{
            width:10%
        }
        .sel{
            width: 5%;
        }
        .allDel{
            text-align: left;
        }
    </style>
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
                $sql = "select * from tb_demo02";
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