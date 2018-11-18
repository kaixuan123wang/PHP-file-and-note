<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2018/11/14
 * Time: 18:36
 */
header("content-type:text/html;charset=utf8");
$path = "c:/windows";
$file = opendir($path);
$i=0;
$x=0;
while($s = readdir($file)){
    if($s!="." && $s!=".."){
        if(is_dir($path."/".$s)){
            echo "<font color='#f00'>".$s."</font><br>";
            $i++;
        }else{
            echo "<font color='#0f0'>".$s."</font><br>";
            $x++;
        }
    }
}
echo "共有 $i 个目录，有 $x 个文件";

closedir($file);
//递归统计目录内文件总大小
function dirsize($dirname){
    $dirsize = 0;
    $dir = opendir($dirname);
    while($filename = readdir($dir)){
        $file = $dirname."/".$filename;
        if($filename!="." && $filename!=".."){
            if(is_dir($file)){
                $dirsize+=dirsize($file);
            }else{
                $dirsize+=filesize($file);
            }
        }
    }
    closedir($dir);
    return $dirsize;
}
//递归删除目录
function deldir($dirname){
    if(file_exists($dirname)){
        $dir = opendir($dirname);
        while($filename = readdir($dir)){
            if($filename!="." && $filename!=".."){
                $file = $dirname."/".$filename;
                if(is_dir($file)){
                    deldir($file);
                }else{
                    unlink($file);
                }
            }
        }
        closedir($dir);
        rmdir($dirname);
    }
}
//复制文件
function copydir($dirsrc,$dirto){
    if(is_file($dirto)){
        echo "目标不是目录不能创建";
        return;
    }
    if(!file_exists($dirto)){
        mkdir($dirto);
    }
    $dir = opendir($dirsrc);
    while($filename=readdir($dir)) {
        if ($filename != "." && $filename != "..") {
            $file1 = $dirsrc . "/" . $filename;
            $file2 = $dirto . "/" . $filename;
            if (is_dir($file1)) {
                copydir($file1, $file2);//递归处理
            } else {
                copy($file1, $file2);
            }
        }
    }
    closedir($dir);
}