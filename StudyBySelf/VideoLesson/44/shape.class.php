<?php
    abstract class Shape{
        public $shapeName;
        abstract function area();
        abstract function perimeter();
        protected function validate($value,$nessage="形状")
        {
            if ($value == "" || !is_numeric($value) || $value < 0) {
                echo '<font color="red">' . $nessage . '必须为非负值的数字，并且不能为空</font><br>';
            } else {
                return true;
            }
        }
    }