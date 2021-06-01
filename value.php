<?php
$a=array("i"=>"c","want"=>"c++","learn"=>"php");
$my=array_values($a);
foreach ($my as $key => $value) {
	echo "<br/>$key-$value";
}
?>