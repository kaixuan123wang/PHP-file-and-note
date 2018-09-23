<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2018/9/23
 * Time: 12:43
 */
    class Result{
        private $shape;
        function __construct()
        {
            switch($_POST['action']){
                case 'rect':
                    $this->shape=new Rect();
                    break;
                case 'triangle':
                    $this->shape=new Triangle();
                    break;
                case 'circle':
                    $this->shape=new Circle();
                    break;
                default:
                    $this->shape=false;

            }
        }
        function __toString()
        {
            // TODO: Implement __toString() method.
            if($this->shape){
                $result=$this->shape->shapeName.'的周长：'.$this->shape->perimeter().'<br>';
                $result.=$this->shape->shapeName.'的面积：'.$this->shape->area().'<br>';
                return $result;
            }else{
                return '没有这个形状';
            }
        }
    }