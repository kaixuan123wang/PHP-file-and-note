<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2018/11/26
 * Time: 9:28
 */
header("content-type:text/html;charset=utf8");
class page
{
    private $total;//数据表中总数据数
    private $listRows;//每页显示行数
    private $limit="limit 0,10";
    private $uri;
    private $pageNum;//分页数
    private $config = array('header'=>"记录",'prev'=>"上一页",'next'=>"下一页",'first'=>"首页",'last'=>"尾页");
    public function __construct($total,$listRows=10)
    {
        $this->total=$total;
        $this->listRows=$listRows;
        $this->uri=$this->getUri();
        $this->page=empty($_GET["page"])? 1:$_GET["page"];
        $this->pageNum = ceil($this->total/$this->listRows);
        $this->limit=$this->setLimit();
    }
    private function setLimit(){
        return "limit ".($this->page-1)*$this->listRows.",{$this->listRows}";
    }
    private function getUri(){
        $url = $_SERVER["REQUEST_URI"].(strpos($_SERVER["REQUEST_URI"],'?')?'':'?');
        $parse = parse_url($url);
        if(isset($parse["query"])){
            parse_str($parse["query"],$params);
            unset($params["page"]);
            echo $parse['path'].'?'.http_build_query($params);
        }
    }
    function __get($args){
        if($args == "limit")
            return $this->limit;
        else
            return null;
    }
    private function start(){
        if($this->total == 0){
            return 0;
        }else{
            return ($this->page-1)*$this->listRows+1;
        }
    }
    private function end(){
        return min($this->page*$this->listRows,$this->total);
    }
    function fpage(){
        $html = "&nbsp;&nbsp;共有{$this->total}{$this->config["header"]}&nbsp;&nbsp;";
        $html.= "&nbsp;&nbsp;每页显示".($this->end()-$this->start()+1)."条，本页{$this->start()}-{$this->end()}&nbsp;&nbsp;";
        return $html;
    }
}