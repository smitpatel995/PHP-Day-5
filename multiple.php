<?php
	$a=array('c','c++','java','php');
	$indexofarray=array_rand($a,2);
	foreach ($indexofarray as $key => $value) {
		echo "<br/>$key- <strong>".$a[$value]."</strong>";
	}
?>