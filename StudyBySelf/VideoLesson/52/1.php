<?php
header("Content-type:text/html;charset=utf8");
 echo filetype("c:/windows");
 if(is_file("c:/windows")){
     echo "这是一个文件";
 }else if(is_dir("c:/windows")){
     echo "这是一个目录";
 }else{
     echo "不清楚文件类型";
 }