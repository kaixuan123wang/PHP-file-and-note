<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2018/12/14
 * Time: 20:24
 */
header("content-type:text/html;charset=utf8");
class Site{
    var $title;
    var $url;
    function __construct($par1,$par2){
        $this->url = $par1;
        $this->title = $par2;
    }
    function getUrl(){
        echo $this->url . PHP_EOL;
    }
    function getTitle(){
        echo $this->title . PHP_EOL;
    }
}
$taobao = new Site("www.taobao.com","淘宝商城");
$taobao->getUrl();
$taobao->getTitle();