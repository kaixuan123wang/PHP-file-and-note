<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .number {font-weight: bold;}
    </style>
</head>
<body>
<?php
//脚本4.1.html获取数值并计算总成本和月付款数
//可以再此进行错误处理
//从$_POST数组获取数值
$price = $_POST['price'];
$quantity = $_POST['quantity'];
$discount = $_POST['discount'];
$tax = $_POST['tax'];
$shipping = $_POST['shipping'];
$payments = $_POST['payments'];
//计算总额
$total = $price * $quantity;
$total = $total + $shipping;
$total = $total -$discount;
//定义税率
$taxrate = $tax/100;
$taxrate = $taxrate + 1;
//纳入税率后的总成本
$total = $total * $taxrate;
//计算月付款数
$monthly = $total / $payments;
//打印结果
print "<p>You have relected to purchase:<br/>
    <span class=\"number\">$quantity</span> widget(s) at <br/>
    $<span class=\"number\">$price</span>
    price each plus a <br/>
    $<span class=\"number\">$shipping</span>shipping cost and a <br/>
    <span class=\"number\">$tax</span> percent tax rate.<br/>
    After your $<span class=\"number\">$discount</span>discount,the totalcost is
    $<span class=\"number\">$total </span>.<br/>
    Divided over <span class=\"number\">$payments</span>monthly payments
    that would be $<span class=\"number\">$monthly</span> each.</p>";
?>
</body>
</html>