<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>计算器</title>
</head>
<?php
    $num1=true;
    $num2=true;
    $message="";
    if(isset($_GET["sub"])){
        if($_GET["num1"]==""){
            $num1=false;
            $message="第一个数不能为空";
        }
        if($_GET["num2"]==""){
            $num2=false;
            $message="第二个数不能为空";
        }
        if($num1 && $num2){
            $sum = 0;
            switch ($_GET["ysf"]){
                case "+":
                    $sum = $_GET["num1"]+$_GET["num2"];
                    break;
                case "-":
                    $sum = $_GET["num1"]-$_GET["num2"];
                    break;
                case "*":
                    $sum = $_GET["num1"]*$_GET["num2"];
                    break;
                case "/":
                    $sum = $_GET["num1"]/$_GET["num2"];
                    break;
                case "%":
                    $sum = $_GET["num1"]%$_GET["num2"];
                    break;
            }
        }

    }
?>
<body>
    <table align="center" border="1" width="500">
        <caption><h1>计算器</h1></caption>
        <form action="02.1calculating%20machine.php">
         <tr>
            <td>
                <input type="text" size="5" name="num1">
            </td>
            <td>
                <select name="ysf" id="">
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="*">*</option>
                    <option value="/">/</option>
                    <option value="%">%</option>
                </select>
            </td>
            <td>
                <input type="text" size="5" name="num2">
            </td>
            <td>
                <input type="submit" name="sub" value="计算">
            </td>
        </tr>
            <?php
                if(isset($_GET["sub"])){
                    echo '<tr><td colspan="5">';
                    if($num1 && $num2){
                        echo "结果：".$_GET["num1"]." ".$_GET["ysf"]." ".$_GET["num2"]." = ".$sum;
                    }else{
                        echo $message;
                    }
                    echo '</td></tr>';
                }
            ?>
        </form>
    </table>
</body>
</html>