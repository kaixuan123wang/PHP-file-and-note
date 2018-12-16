<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2018/12/14
 * Time: 20:32
 */
header("content-type:text/html;charset=utf8");
class MyDestructableClass{
    var $name;
    function __construct(){
        echo "构造函数\n";
        $this->name = "MyDestructableClass";
    }
    function __destruct(){
        echo "销毁" . $this->name . "\n";
    }
}
$obj = new MyDestructableClass();