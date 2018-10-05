<?php
	define ("PI",3.1415926,True);
	$var = constant("PI");
	if(defined("PI")){
		echo "true";
	}else{
		echo "false";
	}
?>