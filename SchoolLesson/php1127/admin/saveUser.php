<?php 
include("conn.php");
if(isset($_POST["btnSave"])){
	$uid = $_POST["uid"];
	$pwd = md5($_POST["pwd"]);
	$sql = "select * from tb_user where username = '$uid'";
	$result = mysql_query($sql);
	if(mysql_num_rows($result)>0){
		echo "<script>alert('用户名已存在，请修改用户名！');location.href='addUser.php';</script>";
	}else{
		$sql = "insert into tb_user(username,password) values('$uid','$pwd')";
		$result = mysql_query($sql,$lk);
		if($result){
		echo "<script>alert('添加管理员信息成功！');location.href='listUser.php';</script>";
		}
	}
	
	mysql_close($lk);
}
?>