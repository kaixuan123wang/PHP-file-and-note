1.php文本标记方法
	（1）<?php nr ?>
	（2）<? nr?>
	（3）<% nr%>
	（4）script langulage="php"
	2、3中方法都需要在php.ini文件中进行配置，将short/asp的值改成On
2.注释方法
	单行注释：//nr
	多行注释：/*nr*/
	shell形式注释：# nr
3.echo函数
	（1）.echo ""; ps:最好在echo与引号之间加一个空格，双引号可以使引号内的变量自动赋值
	（2）.echo ''; ps:单引号无法使引号内的变量自动赋值
	（3）.echo();
4.变量类型
	整数型 $num = 12;
	浮点型 $num = 1.2;
	字符串型 $str = "srczx";
			 $str = 'srczx';
			 $str = <<<DB
						srczx
					DB;
	布尔型 $blag = true;