<?php 
if(isset($_GET["id"])){
	$sid = $_GET["id"];
	include("conn.php");
	$sql = "delete from tb_user where id=".$sid;
	$result = mysql_query($sql,$lk);
	if($result){
		echo "<script>location.href='listUser.php';</script>";
	}
	else{
		echo "<script>location.href='listUser.php';</script>";
	}
}
else{
	//header("Location:list.php");
	echo "<script>location.href='listUser.php';</script>";
}
?>