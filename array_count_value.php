<?php
	$a=array("c","php","java","php");
	$new = array_count_values($a);
	foreach ($new as $key => $value) {
		echo "<br/>$key - $value";
	}
?>