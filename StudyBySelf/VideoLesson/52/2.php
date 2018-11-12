<?php
header("content-type:text/html;charset=utf8");
date_default_timezone_set('prc');
function getFilePro($filename){
    if(!file_exists($filename)){
        echo "文件或目录{$filename}不存在<br>";
        return;
    }else{
        echo "文件类型".filetype($filename)."<br>";
    }
    if(is_file($filename)){
        echo "这是一个文件<br>";
        echo "文件的大小为".getFileSize(filesize($filename))."<br>";
    }
    if(is_dir($filename)){
        echo "这是一个目录<br>";
    }
    if(is_readable($filename)){
        echo "这个文件可以读<br>";
    }
    if(is_writable($filename)){
        echo "这个文件可写<br>";
    }
    if(is_executable($filename)){
        echo "这个文件可执行<br>";
    }
    echo "文件的创建时间：".date("Y-m-d H-i-s",filectime($filename))."<br>";
    echo "文件的修改时间：".date("Y-m-d H-i-s",filemtime($filename))."<br>";
    echo "文件的最后访问时间".date("Y-m-d H-i-s",fileatime($filename))."<br>";
}
function getFileSize($size){
    $dw = "Byte";
    if($size >= pow(2,40)){
        $size = round($size/pow(2,40),2);
        $dw = "TB";
    }elseif($size >= pow(2,30)){
        $size = round($size/pow(2,30),2);
        $dw = "GB";
    }elseif($size >= pow(2,20)){
        $size = round($size/pow(2,20),2);
        $dw = "MB";
    }elseif($size >= pow(2,10)){
        $size = round($size/pow(2,10),2);
        $dw = "KB";
    }else{
        $dw = "Bytes";
    }
    return $size.$dw;
}
getFilePro("demo.txt");
getFilePro("c:/windows");