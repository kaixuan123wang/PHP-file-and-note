<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2018/9/19
 * Time: 19:31
 */
header("Content-Type: text/html;charset=utf-8");
    class ex{
        var $name;
        var $age;
        var $sex;
        //php中魔术方法__construct
        function __construct($name = 0,$age = 0,$sex=0){
            $this->name = $name;
            $this->age = $age;
            $this->sex = $sex;
            echo "$name ############ $age ##################$sex <br>";
        }
        function say(){
            echo "我的名字：{$this->name}，我的年龄：{$this->age}，我的性别：{$this->sex}";
        }
        function __destruct()
        {
            // TODO: Implement __destruct() method.
            echo $this->name."再见";
        }
    }

    $p1 = new ex('zhangsan',50,'男');
    $p1->say();