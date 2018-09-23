<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2018/9/23
 * Time: 12:55
 */
class Circle extends Shape{
    private $radius=0;
    function __construct()
    {
        $this->shapeName="圆形";
        if($this->validate($_POST["radius"],'圆的半径')){
            $this->radius=$_POST["radius"];
        }else{
            exit;
        }

    }
    function area()
    {
        // TODO: Implement area() method.
        return pi()*$this->radius*$this->radius;
    }
    function perimeter()
    {
        // TODO: Implement perimeter() method.
        return 2*pi()*$this->radius;
    }
}