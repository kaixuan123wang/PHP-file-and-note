<?php
	header("Content-type:text/html;charset=utf8");
	if(isset($_GET["Btn"])){
	$value = $_GET["voit"];
	$fname = "./void.txt";
	$f = fopen($fname, "r");
	$astr = fread($f, 100);
	$aarr = explode("|",$astr);
	$aarr[$value]++;
	$bstr = implode("|",$aarr);
	$f = fopen($fname, "w");
	fwrite($f, $bstr);
	fclose($f);
		echo "<script>alert('投票成功！');location.href='5.php';</script>";
	}else{
				echo "<script>alert('请先投票！');location.href='3.php';</script>";
	}
?>