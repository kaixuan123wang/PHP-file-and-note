<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2018/12/14
 * Time: 20:04
 */
header("content-type:text/html;charset=utf8");
class Site{
    /*成员变量*/
    var $url;
    var $title;
    /*成员函数*/
    function setUrl($par){
        $this->url = $par;
    }
    function getUrl(){
        echo $this->url . PHP_EOL;
    }
    function setTitle($par){
        $this->title = $par;
    }
    function getTitle(){
        echo $this->title . PHP_EOL;
    }
}
$taobao = new Site;
$taobao->setUrl("www.taobao.com");
$taobao->setTitle("淘宝");
$taobao->getTitle();
$taobao->getUrl();