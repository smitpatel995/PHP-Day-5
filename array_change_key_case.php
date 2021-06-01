<?php
$a=array("Banana"=>"yellow","apple"=>"red","mango"=>"green");
$up=array_change_key_case($a,CASE_UPPER);
print_r($up);
?>