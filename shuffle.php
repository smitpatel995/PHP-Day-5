<?php
$a=array("swimming","Online games","Cricket");
shuffle($a);
foreach ($a as $key => $value) {
	echo "<br/>$value";
}
?>