<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2018/12/15
 * Time: 13:38
 */
header("content-type:text/html;charset=utf8");
class BaseClass{
    function __construct(){
        print "BaseClass 类中构造方法";
    }
}
class SubClass extends BaseClass{
    function __construct(){
        parent::__construct();
        print "SubClass 类中构造方法";
    }
}
class OtherSubClass extends BaseClass{
    function __construct()
    {
        pri6nt "OtherSubClass 类中的构造方法";
    }
}
class OtherSubClass2 extends BaseClass{

}
$obj = new BaseClass();
$obj = new SubClass();
$obj = new OtherSubClass();
$obj = new OtherSubClass2();