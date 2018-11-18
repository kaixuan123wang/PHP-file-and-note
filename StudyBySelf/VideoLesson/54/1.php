<?php
$file = fopen("./test.txt","r");//如果打开文件成功返回真，如果失败返回假
echo fread($file,filesize("./test.txt"));
fclose($file); //关闭文件资源
$file = fopen("http://www.baidu.com","r");
$str="";
$i=0;
while(!feof($file)){
    $str.=fgets($file);
    $i++;
}