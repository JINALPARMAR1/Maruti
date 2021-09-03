<?php
	$l = "localhost";
	$r = "root";
	$p = "";
	$db = "maruti";

	$con = mysqli_connect($l, $r, $p, $db);

	if($con == true){
		echo " ";
	}else
	{
		echo "Unsuccessful";
	}
?>