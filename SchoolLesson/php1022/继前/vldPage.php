<?php
session_start();
if(!isset($_SESSION["loginOK"])){
	echo "<script>alert('你是一个非法用户！');location.href='login.php';</script>";
	};
?>