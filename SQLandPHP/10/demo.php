<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2018/11/26
 * Time: 9:28
 */
include "page.php";
$link = mysql_connect("localhost","root","w19980915");
mysql_select_db("wang");
$result = mysql_query("select * from tb_demo02");
$total = mysql_num_rows($result);
$num = 10;
$page = new page($total,$num,"&cid=99");
$sql = "select * from tb_demo02 {$page->limit}";
$result = mysql_query($sql);
echo "<table border='1' width='1000'>";
while ($row = mysql_fetch_array($result)){
    echo "<tr>";
    echo "<td width='250'>";
    echo "$row[0]";
    echo "</td>";
    echo "<td width='250'>";
    echo "$row[1]";
    echo "</td>";
    echo "<td width='250'>";
    echo "$row[2]";
    echo "</td>";
    echo "<td width='250'>";
    echo "$row[3]";
    echo "</td>";
    echo "<td width='250'>";
    echo "$row[4]";
    echo "</td>";
    echo "</tr>";
}
echo "<tr><td>{$page->fpage()}</td></tr>";
echo "</table>";
