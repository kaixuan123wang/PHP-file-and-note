<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2018/9/23
 * Time: 19:30
 */
echo substr("abcdefghijklmn",2,4).'<br>'; //cdef
echo substr("123456789",2,4).'<br>';

$str = "abcdef";
echo $str{2}."<br>";
echo $str[2]."<br>";

//字符串输出函数，echo()/print()
//die() 相当于exit
// printf()格式化字符串
//sprintf() 返回格式化字符串
echo "123456789<br>";
echo "222","333","444","<br>";

//die("123456<br>");

//fopen("11.php","r") or die("打开文件失败");
//echo "see";
//printf可以输出%s/%d/%f/%.2f/%b/%c/%x/%o/
$str1 = "123456";
printf("------%s------<br>",$str1);
$str2 = sprintf("------%s------",$str1);
echo $str2;

//常用的字符串格式化函数
//ltrim()
$a = "   abc    ";
echo strlen($a)."<br>";//10
echo strlen(ltrim($a))."<br>";//7,去前空格
//rtrim()
echo strlen(rtrim($a))."<br>";//6,去后空格
//trim()
echo strlen(trim($a))."<br>";//3,去所有空格
//str_pad()
$b = "LAMP";
echo "<pre>";
echo str_pad($b,10,"#=")."<br>";//用#=补充$b字符串至10字符;默认右边补充;
echo str_pad($b,10,"#=",STR_PAD_BOTH)."<br>";//在两边补充
echo str_pad($b,10,"#=",STR_PAD_LEFT)."<br>";//在左边补充
//与大小写有关的函数
//strtolower()
$c = "LEMp";
echo strtolower($c)."<br>"; //把字符串全部转为小写
//strtoupper()
$d = "LeMp";
echo strtoupper($d)."<br>";
//ucfirst()
$e = "first";
echo ucfirst($e)."<br>";
//ucwords()
$f = "i am mr li";
echo ucwords($f)."<br>";
//和HTML标签有关的字符串格式化
//n12br
$str = "abc
efg
esss
dsd";
echo $str;
//echo n12br($str);
//htmllentities()

//htmlspecialchars
echo htmlspecialchars($_GET["str"])."<br>";//防止跨站与脚本攻击，转义字符
//stripslashes()
//strip_tags()
//其他的字符串格式化函数
//number_format()
//strrev()
$z = "http://www.cvit.com.cn";
echo strrev($z)."<br>";
//md5()
$pass = "w19980915";
echo md5($pass);
//字符串比较函数
//strcmp()/strcasecmp()忽略大小写比较/strnatcmp()
