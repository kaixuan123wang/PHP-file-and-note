<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2018/12/14
 * Time: 20:59
 */
class MyClass{
    public $public = 'Public';
    protected $protected = 'Protected';
    private $private = 'Private';
    function  printHello(){
        echo $this->public;
        echo $this->protected;
        echo $this->private;
    }
}
$obj = new MyClass();
echo $obj->public;
//echo $obj->protected;
//echo $this->private;
$obj->printHello();
class MyClass2 extends MyClass{
    protected $protected = 'Protected2';
    function printHello(){
        echo $this->public;
        echo $this->protected;
//        echo $this->private;
    }
}
$obj2 = new MyClass2;
echo $obj2->public;
//echo $obj2->private;
//echo $obj2->protected;
$obj2->printHello();