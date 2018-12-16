<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2018/12/15
 * Time: 13:18
 */
class Foo{
    public static $my_static = "foo";
    public function staticValue(){
        return self::$my_static;
    }
}
print Foo::$my_static;
$foo = new Foo();
print $foo->staticValue();
