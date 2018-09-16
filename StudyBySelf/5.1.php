<?php
//    for语句遍历数组
//    $user = array(1,"zhangsan",'nan',"ass@qq.com");
//    for($i=0;$i<count($user);$i++){
//        echo "\$user[$i]=".$user[$i]."<br>";
//    }
//    foreach循环遍历
//      第一种方式
//    foreach($user as $value){
//        echo $value."<br>";
//    }
//      第二种方式
//    foreach($user as $key=>$value){
//        echo $key."------->".$value."<br>";
//    }
//    while()、list()、each()组合循环遍历数组
    $user = array("id"=>1,"name"=>"zhangsan","age"=>10,"sex"=>"nan");
//    $a = each($user);
//    print_r($a);    //Array ( [1] => 1 [value] => 1 [0] => id [key] => id )
//    $b = each($user);
//    print_r($b);    //Array ( [1] => zhangsan [value] => zhangsan [0] => name [key] => name )
    while(list($key,$value)=each($user)){
        echo $key."----->".$value."<br>";
    }