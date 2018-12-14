<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2018/11/30
 * Time: 6:52
 */
$syear = (string)1997;
$smonth = (string)1;
$sday = (string)1;

for($syear=1997;$syear<2001;$syear++){
    for($smonth=1;$smonth<=12;$smonth++){
        for($sday=1;$sday<=31;$sday++){
            if($smonth<10){
                $smonth = str_pad("$smonth",2,0,STR_PAD_LEFT);
            }
            if($sday<10){
                $sday = str_pad("$sday",2,0,STR_PAD_LEFT);
            }//739a
            $start = $syear.$smonth.$sday;
            echo $start."<br>";
            echo md5($start)."123456782";
            echo "<br>";
        }
    }
}

