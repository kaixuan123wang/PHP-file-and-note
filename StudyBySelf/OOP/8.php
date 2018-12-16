<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2018/12/14
 * Time: 21:16
 */
interface iTemplate{
    public function setVariable($name,$var);
    public function getHtml($template);
}
class Template implements iTemplate{
    private $vars = array();
    public function setVariable($name,$var){
        $this->vars[$name] = $var;
    }
    public function getHtml($template){
        foreach($this->vars as $name => $value){
            $template = str_replace('{'.$name.'}',$value,$template);
        }
        return $template;
    }
}
