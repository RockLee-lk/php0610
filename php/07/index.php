<?php 
// 索引数组
$arr = ['一','二','三','四','五'];

list($a, $b, $c) = $arr;
var_dump($a);
var_dump($b);
var_dump($c);



$arr = ['一','二',15 => '三','四','五'];
each($arr);







