<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2018/9/27
 * Time: 14:31
 */
header("Content-type:text/html;charset=utf-8");
$str = "12345646556http://www.baidu.comzxzxzxxzsd123";
function setUrl($str){
    $url = "/(https?|ftps?):\/\/((www|mail|news)\.([^\.\/]+)\.(com|org|net))/i";
    preg_match_all($url,$str,$arr,PREG_PATTERN_ORDER);
    foreach($arr[0] as $url){
        $str = str_replace($url,'<font color="red">'.$url.'</font>',$str);
    }
    return $str;
}
echo setUrl($str);