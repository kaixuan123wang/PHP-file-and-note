<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2018/12/14
 * Time: 21:27
 */
class MyClass{
    const constant = '常量值';
    function  showConstant(){
        echo self::constant;
    }
}
echo MyClass::constant;
$classname = "MyClass";
echo $classname::constant;
$class = new MyClass();
$class->showConstant();
echo $class::constant;