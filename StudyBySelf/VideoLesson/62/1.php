<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2018/11/18
 * Time: 16:27
 */
date_default_timezone_set("prc");
$int = time();
$arr = getdate();
$date = date("Y-m-d H:i:s W",time());
echo $int."<br>";
echo "$date <br>";
echo "<pre>";
print_r($arr);
echo "</pre>";