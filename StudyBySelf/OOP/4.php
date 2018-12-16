<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2018/12/14
 * Time: 20:39
 */
header("content-type:text/html;charset=utf8");
class Site{
    var $url;
    var $title;
    function setUrl($par){
        $this->url = $par;
    }
    function setTitle($par){
        $this->title = $par;
    }
    function getUrl(){
        echo $this->url;
    }
    function getTitle(){
        echo $this->title;
    }
}
class Child extends Site{
    var $category;
    function setCategory($par){
        $this->category = $par;
    }
    function getCategory(){
        echo $this->category;
    }
    function getAll(){
        $this->getUrl();
        $this->getTitle();
        $this->getCategory();
    }
}
$obj = new Child();
$obj->setUrl("www.taobao.com");
$obj->setTitle("淘宝商城");
$obj->setCategory("购物网站");
$obj->getAll();