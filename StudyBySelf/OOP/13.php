<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2018/12/15
 * Time: 13:29
 */
class BaseClass{
    public function test(){
        echo "BaseClass::test() called";
    }
    final public function moreTesting(){
        echo "BaseClass::moreTesting() called";
    }
}
class ChildClass extends BaseClass{
    //错误，final的方法无法被重写
    public function moreTesting(){
        echo "ChildClass::moreTesting() called";
    }
}
