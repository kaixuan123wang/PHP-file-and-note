<?php
//file_put_contents("test.txt","www.baidu.com");
//echo file_get_contents("test.txt");
//readfile("test.txt");
$arr = file("test.txt");
print_r($arr);