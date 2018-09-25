<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2018/9/25
 * Time: 20:07
 */
header("Content-type:text/html;charset=utf-8");
//htmlspecialchars($str);
//将字符串中标签转换为实体，防止被浏览器翻译
$str = "<p>你好，世界。</p>";
echo htmlspecialchars($str);