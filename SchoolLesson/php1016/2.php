<?php 
	session_start();
?>
<?php 
	header("Content-type:text/html;charset=utf8");
	include("4.php");
	$userArr = explode("|", $userString);
	if(isset($_POST["lgnBtn"])){
		$uid = md5($_POST["uid"]);
		$pwd = md5($_POST["pwd"]);
		if($uid == $userArr[0] and $pwd == $userArr[1]){
			$_SESSION["uid"] = $uid;
			$_SESSION["time"] = date(Y年m月d日);
			$_SESSION["loginOK"] = 1;
			echo "<script>alert('登陆成功！');location.href='3.php';</script>";
		}else{
			echo "<script>alert('用户名或密码错误，请重新登录！');location.href='1.php';</script>";
		}
	}else{
		echo "<script>alert('你是一个非法用户！');location.href='1.php';</script>";
	}
?>
