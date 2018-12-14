<?php 
session_start();
header('Content-type:text/html;charset=utf-8'); //设置PHP的编码集
include("conn.php");
if(isset($_POST["lgnBtn"])){
	$uid = $_POST["uid"];
	$pwd = md5($_POST["pwd"]);
	$sql = "select * from tb_user where username='$uid' and password='$pwd'";
	$result = mysql_query($sql,$lk);
	if(mysql_num_rows($result)>0){
		$_SESSION["uid"] = $uid;
		$_SESSION["time"] = date("Y年m月d日");
		$_SESSION["loginok"] = 1;
		echo "<script>alert('您是一个合法用户！');location.href='main.php';</script>";
	}
	else{
		echo "<script>alert('用户名或密码错误，请重新登录！');location.href='login.php';</script>";
	}
}
else {
	echo "<script>alert('您还没有登录，请先登录！');location.href='login.php';</script>";
}
?>
