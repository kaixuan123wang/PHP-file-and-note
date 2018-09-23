<?php
header("Content-Type: text/html;charset=utf-8");
    class ex1{
        var $s;
        function text(){
            echo "wwww {$this->s}<br>";
        }
        function __call($x,$i){
            echo "不存在 $x 函数，也不存在传入值：";
            var_dump($i);

        }
        function __toString(){
            return "不能直接输出类<br>";
        }
    }
    $p1 = new ex1();
    $p2 = new ex1();
    $p1->text();
    $p2->text();
    $p1->ssdddd('how','what');
    echo $p2;