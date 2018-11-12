<?php
	$a = "王艳军";
	echo md5($a);
	echo "<hr>";
	echo sha1($a);
	echo "<hr>";
	echo crypt($a,"$6$");
?>