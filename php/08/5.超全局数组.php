<?php 

$arr = [1,2,3,4,5];
$_POST = $arr;

var_d($arr); // 外部使用
var_dump($_POST); //外部使用


echo '<hr>';

function test(){


	// var_dump($arr); // 不能内部使用
	var_dump($_POST); // 可以内部使用
}

test();



