<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2018/12/15
 * Time: 12:49
 */
abstract class AbstractClass{
    //强制要求子类定义的方法
    abstract protected function getValue();
    abstract protected function prefixValue($prefix);
    //普通方法（非抽象方法）
    public function printOut(){
        print $this->getValue();
    }
}
class ConcreteClass1 extends AbstractClass{
    protected function getValue(){
        return "CpncreteClass1";
    }
    public function prefixValue($prefix){
        return "{$prefix}ConcretrClass1";
    }
}
class ConcreteClass2 extends AbstractClass{
    public function getValue(){
        return "ConcreteClass2";
    }
    public function prefixValue($prefix){
        return "{$prefix}ConcreteClass2";
    }
}
$class1 = new ConcreteClass1;
$class1->printOut();
echo $class1->prefixValue('FOO_');

$class2 = new ConcreteClass2;
$class2->printOut();
echo $class2->prefixValue('FOO_');