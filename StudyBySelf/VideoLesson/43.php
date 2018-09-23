<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2018/9/22
 * Time: 20:28
 */
//interface Deno{
//    const HOST="localhost";
//    const USER="Admin";
//    function fun1();
//    function fun2();
//}
//interface Demo extends Deno{
//    function fun3();
//    function fun4();
//}
//interface Demo3{
//    function fun5();
//    function fun6();
//}
//interface Demo4{
//    function fun7();
//    function fun8();
//}
//class Hello{
//    function fun9(){
//
//    }
//}
//class Test extends Hello implements Demo,Demo3 ,Demo4{
//    function fun1(){
//
//    }
//    function fun2(){
//
//    }
//    function fun3(){
//
//    }
//    function fun4(){
//
//    }
//    function fun5(){
//
//    }
//    function fun6(){
//
//    }
//    function fun7(){}
//    function fun8(){}
//}
// 多态
interface Test{
    function aaa();
    function bbb();
}
class one implements Test{
    function aaa(){
        echo "AAAAAAAAAAA<br>";
    }
    function bbb(){
        echo "BBBBBBBBBBB<br>";
    }
}
class two implements Test{
    function aaa(){
        echo "11111111111<br>";
    }
    function bbb(){
        echo "22222222222<br>";
    }
}

$a = new two;
$a->aaa();
$a->bbb();