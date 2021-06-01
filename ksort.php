<?php
$a=array("banana"=>"yellow","apple"=>"red","mango"=>"green");
ksort($a);
foreach ($a as $key => $value) {
	echo "<br/>$key-$value";
}
?>

<?php
$a=array("banana"=>"yellow","apple"=>"red","mango"=>"green");
krsort($a);
foreach ($a as $key => $value) {
	echo "<br/>$key-$value";
}
?>