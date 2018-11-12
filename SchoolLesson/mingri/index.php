<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <style>
			article{
				margin: 10px auto;
			}
            article form ul li{
                width: 100%;
                border-top:1px dashed #999;
                border-bottom: 1px dashed #999;
                border-collapse: collapse;
            }
			article form p{
				display: flex;
				flex-flow: row nowrap;
				justify-content: space-between;
                margin:5px auto;
                width: 25%;
			}
			article form p label{
				display: inline-block;
				width: 80px;
				text-align: right;
			}
			article form p input{
				width: 150px;
			}
			article form .but{
				margin: 5px auto;
				width: 10%;
			}
			article form .but input{
				width: 50px;
			}
        </style>
    </head>
    <body>
    	<?php include("header.php");?>
    <article>
    	<form action="index_ok.php" method="get">
            <ul>
                <li><p><label for="name">书名：</label><input type="text" name="name" id="name"></p></li>
                <li><p><label for="price">价格：</label><input type="number" name="price" id="price"></p></li>
                <li><p><label for="time">出版时间：</label><input type="date" name="time" id="time"></p></li>
                <li><p><label for="kind">所属类别：</label><input type="text" name="kind" id="kind"></p></li>
                <li>
                    <p class="but">
                        <input type="submit" value="添加" name="sbtAdd" id="sbtAdd" onclick="return space()">
                        <input type="reset" value="重置">
                    </p>
                </li>
            </ul>





    	</form>
    </article>
    	<?php include("footer.php");?>
    <script>
    var $ = function(sel){
    	return document.querySelector(sel);
    };
    function space(){
    	if($("#name").value == ""){
    		alert("书名不能为空！");
    		return false;
    	};
    	if($("#price").value == ""){
    		alert("价格不能为空！");
    		return false;
    	}
    	if($("#time").value == ""){
    		alert("时间不能为空！");
    		return false;
    	}
    	if($("#kind").value == ""){
    		alert("种类不能为空！");
    		return false;
    	}
    }
    </script>
    </body>
</html>