<?php
    include("conn.php");
    $sql = "select * from tb_dingdan";
    $result = mysql_query($sql);
?>
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
        table{
            width: 100%;
            margin:0 auto;
            text-align: center;
        }
        .head{
            background: #999;
            color:#fff;
        }
        .button{
            text-align: right;
        }
    </style>
</head>
<body>
    <table border="1" cellspacing="0">
        <tr>
            <td colspan="8" class="head">
                查看订单
            </td>
        </tr>
        <tr>
            <td>订单号</td>
            <td>下单人</td>
            <td>订货人</td>
            <td>金额总计</td>
            <td>付款方式</td>
            <td>收获方式</td>
            <td>订单状态</td>
            <td>操作</td>
        </tr>
        <form action="deletedd.php" method="post">
            <?php while ($arr = mysql_fetch_array($result)){?>
            <tr>
                <td><?php echo $arr["dingdanhao"]?></td>
                <td><?php echo $arr["xiadanren"]?></td>
                <td><?php echo $arr["shouhuoren"]?></td>
                <td><?php echo $arr["total"]?></td>
                <td><?php echo $arr["zfff"]?></td>
                <td><?php echo $arr["shff"]?></td>
                <td><?php echo $arr["zt"]?></td>
                <td>
                    <input type="checkbox" name="del[]" value=<?php echo $arr["id"]?>>
                </td>
            </tr>
            <?php }?>
            <tr class="button">
                <td colspan="8">
                    <input type="submit" value="删除选择项" name="sbt">
                </td>
            </tr>
        </form>
    </table>
</body>
</html>
<?php
