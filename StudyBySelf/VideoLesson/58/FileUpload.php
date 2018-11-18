<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2018/11/16
 * Time: 17:49
 */

class FileUpload
{
    private $filepath;  //指定上传文件保存的路径
    private $allowtype = array('gif','jpg','png','jpeg'); //允许上传文件的类型
    private $maxsize = 1000000;   //允许上传文件的最大长度
    private $israndname = true;    //是否随机重命名文件，true随机、false不随机用原名
    private $originName;//上传的原文件名称
    private $tmpFileName;//临时文件名
    private $fileType;//文件类型
    private $fileSize;//文件大小
    private $newFileName;//新文件名
    private $errorNum = 0;//错误号
    private $errorMess = "";//用来提供错误报告
    //用于对上传文件初始化
    //1.指定上传路径2.允许的文件类型3.限制文件大小4.是否使用随机文件名称
    //让用户不用按位置传入参数，后面参数给值不用将前几个参数也提供值
    function __construct($options = array())
    {
        foreach ($options as $key=>$value){
            $key = strtolower($key);
            //查看用户参数中数组的下标是否和成员的属性名相同
            if(!in_array($key,get_class_vars(get_class($this)))){
                continue;
            }
            $this->setOption($key,$value);
        }

    }
    private function setOption($key,$value){
        $this->$key=$value;
    }
    private function getError(){
        $str="上传文件<font color='#f00'>{$this->originName}</font>时出错";

        switch ($this->errorNum){
            case 4:$str.="没有文件被上传";
                break;
            case 3:$str.="文件只被部分上传";
                break;
            case 2:$str.="上传文件超过了HTML表单中MAX_FILE_SIZE选项指定的值";
                break;
            case 1:$str.="上传文件超过了php.ini中upload_max_filesize选择项的值";
                break;
            case -1:$str.="未允许类型";
                break;
            case -2:$str.="文件过大上传文件不能超过{$this->maxsize}个字节";
                break;
            case -3:$str.="上传失败";
                break;
            case -4:$str.="简历存放上传文件目录失败，请重新指定上传目录";
                break;
            case -5:$str.="必须指定上传文件的路径";
                break;
            default:$str .= "未知错误";
        }

        return $str.'<br>';
    }
    //用来检查文件上传路径
    private function checkFilePath(){
        if(empty($this->filepath)){
            $this->setOption('errorNum',-5);
            return false;
        }
        if(!file_exists($this->filepath) || !is_writable($this->filepath)){
            if(!@mkdir($this->filepath,0755)){
                $this->setOption('errorNum',-4);
                return false;
            }
        }
    }
    //用于检查文件上传类型
    private function checkFileType(){
        if(in_array(strtolower($this->fileType),$this->allowtype)){
            return true;
        }else{
            $this->setOption('errorNum',-1);
            return false;
        }
    }
    //用来检查文件上传的大小
    private function checkFileSize(){
        if($this->fileSize > $this->maxsize){
            $this->setOption('errorNum',-2);
            return false;
        }else{
            return true;
        }
    }
    //设置上传后的文件名称
    private function setNewFileName(){
        if($this->israndname){
            $this->setOption('newFileName',$this->proRandName());
        }else{
            $this->setOption('newFileName',$this->originName);
        }
    }
    //设置随机文件名称
    private  function proRandName(){
        $fileName = date("YmdHis").rand(100,999);
        return $fileName.'.'.$this->fileType;
    }
    //用于上传一个文件
    function uploadFile($fileField){
        $return = true;
        //检查文件上传路径是否正确
        if(!$this->checkFilePath()){
            $this->errorMess=$this->getError();
            return false;
        }
        $name = $_FILES[$fileField]['name'];
        $tmp_name = $_FILES[$fileField]['tmp_name'];
        $size = $_FILES[$fileField]['size'];
        $error = $_FILES[$fileField]['error'];

        if($this->setFiles($name,$tmp_name,$size,$error)){
            if($this->checkFileSize() && $this->checkFileType){
                $this->setNewFileName();
                if($this->copyFile()){
                    return true;
                }else{
                    $return = false;
                }
            }else{
                $return = false;
            }
        }else{
            $return = false;
        }
        if(!$return){
            $this->errorMess = $this->getErrorMsg();
        }
        return $return;
    }
    //设置和$_FILES有关的内容
    private function setFiles($name="",$tmp_name='',$size=0,$error=0){
        $this->setOption('errorNum',$error);
        if($error){
            return false;
        }
        $this->setOption('originName',$name);
        $this->setOption('tmpFileName',$tmp_name);
        $arrStr = explode(".",$name);
        $this->setOption('fileType',strtolower($arrStr[count($arrStr)-1]));
        $this->setOption('fileSize',$size);

        return true;
    }
    private function copyFile(){
        if(!$this->errorNum){
            $filepath=rtrim($this->filepath,'/').'/';
            $filepath.=$this->newFileName;
            if(@move_uploaded_file($this->tmpFileName,$filepath)){
                return true;
            }else{
                $this->setOption('errorNum',-3);
                return false;
            }
        }else{
            return false;
        }
    }
    //用于获取上传后文件的文件名
    function getNewFileName(){
        return $this->newFileName;
    }
    //上传失败调用这个方法查看错误报告
    function getErrorMsg(){
        return $this->errorMess;
    }
}