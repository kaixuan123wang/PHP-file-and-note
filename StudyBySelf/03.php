<?php
function table($x,$y,$color1,$color2){
    echo '<table border="1" width="800" align="center">';
    echo '<caption><h1>表名</h1></caption>';

    for($i=0;$i<$x;$i++){
        if($i%2 == 0){
            $bg=$color1;
        }else{
            $bg=$color2;
        }
        echo '<tr bgcolor="'.$bg.'">';
        for($j=0;$j<$y;$j++){
            echo '<td>'.($i*10+$j).'</td>';
        }
        echo '</tr>';
    }
}
table(100,20,'#fff','#ccc');
table(100,10,'#f00','#0f0');
