<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2018/10/3
 * Time: 19:17
 */
include "page.class.php";

$link = mysql_connect("localhost","root","w19980915");
mysql_select_db("xsphpdb");
$result = mysql_query("select * from shops");
$total = mysql_num_rows($result);
$num=10;
$page = new Page($total,$num);
$sql = "select * from shops {$page->limit}";
$result = mysql_query($sql);
echo '<table align="center" border="1" width="1000">';
echo '<caption><h1>SHOPS</h1></caption>';
while($row=mysql_fetch_assoc($result)){
    echo '<tr>';

    echo '</tr>';
}
    echo '</table>'